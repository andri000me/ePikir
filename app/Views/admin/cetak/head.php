<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<link rel="stylesheet" href="<?= base_url()?>assets/print/css/960.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?= base_url()?>assets/print/css/screen.css" type="text/css" media="screen" />
		<link rel="stylesheet" href="<?= base_url()?>assets/print/css/print-preview.css" type="text/css" media="screen">
		<link rel="stylesheet" href="<?= base_url()?>assets/print/css/print.css" type="text/css" media="print" />

		<script src="<?= base_url()?>assets/print/css/jquery.tools.min.js"></script>
		<!-- <script src="<?= base_url()?>assets/print/css/jquery.print-preview.js" type="text/javascript" charset="utf-8"></script> -->

		<script type="text/javascript">
			(function($) { 

                var link_back = "<?= base_url().'Admin/'.$link ?>";
                
				// Initialization
				$.fn.printPreview = function() {
					this.each(function() {
						$(this).bind('click', function(e) {
						    e.preventDefault();
						    if (!$('#print-modal').length) {
						        $.printPreview.loadPrintPreview();
						    }
						});
					});
					return this;
				};
			    
			    // Private functions
			    var mask, size, print_modal, print_controls;
			    $.printPreview = {
			        loadPrintPreview: function() {
			            // Declare DOM objects
			            print_modal = $('<div id="print-modal"></div>');
			            print_controls = $('<div id="print-modal-controls">' + 
			                                    '<a href="#" class="print" title="Cetak sekarang">Print page</a>' +
			                                    '<a href="#" class="close" title="Tutup tampilan cetak">Close</a>').hide();
			            var print_frame = $('<iframe id="print-modal-content" scrolling="no" border="0" frameborder="0" name="print-frame" />');

			            // Raise print preview window from the dead, zooooooombies
			            print_modal
			                .hide()
			                .append(print_controls)
			                .append(print_frame)
			                .appendTo('body');

			            // The frame lives
			            for (var i=0; i < window.frames.length; i++) {
			                if (window.frames[i].name == "print-frame") {    
			                    var print_frame_ref = window.frames[i].document;
			                    break;
			                }
			            }
			            print_frame_ref.open();
			            print_frame_ref.write('<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">' +
			                '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">' + 
			                '<head><title>' + document.title + '</title></head>' +
			                '<body></body>' +
			                '</html>');
			            print_frame_ref.close();
			           
			            // Grab contents and apply stylesheet
			            var $iframe_head = $('head link[media*=print], head link[media=all]').clone(),
			                $iframe_body = $('body > *:not(#print-modal):not(script)').clone();
			            $iframe_head.each(function() {
			                $(this).attr('media', 'all');
			            });
			            if (!$.browser.msie && !($.browser.version < 7) ) {
			                $('head', print_frame_ref).append($iframe_head);
			                $('body', print_frame_ref).append($iframe_body);
			            }
			            else {
			                $('body > *:not(#print-modal):not(script)').clone().each(function() {
			                    $('body', print_frame_ref).append(this.outerHTML);
			                });
			                $('head link[media*=print], head link[media=all]').each(function() {
			                    $('head', print_frame_ref).append($(this).clone().attr('media', 'all')[0].outerHTML);
			                });
			            }
			            
			            // Disable all links
			            $('a', print_frame_ref).bind('click.printPreview', function(e) {
			                e.preventDefault();
			            });
			            
			            // Introduce print styles
			            $('head').append('<style type="text/css">' +
			                '@media print {' +
			                    '/* -- Print Preview --*/' +
			                    '#print-modal-mask,' +
			                    '#print-modal {' +
			                        'display: none !important;' +
			                    '}' +
			                '}' +
			                '</style>'
			            );

			            // Load mask
			            $.printPreview.loadMask();

			            // Disable scrolling
			            $('body').css({overflowY: 'hidden', height: '100%'});
			            $('img', print_frame_ref).load(function() {
			                print_frame.height($('body', print_frame.contents())[0].scrollHeight);
			            });
			            
			            // Position modal            
			            starting_position = $(window).height() + $(window).scrollTop();
			            var css = {
			                    top:         starting_position,
			                    height:      '100%',
			                    overflowY:   'auto',
			                    zIndex:      10000,
			                    display:     'block'
			                }
			            print_modal
			                .css(css)
			                .animate({ top: $(window).scrollTop()}, 400, 'linear', function() {
			                    print_controls.fadeIn('slow').focus();
			                });
			            print_frame.height($('body', print_frame.contents())[0].scrollHeight);
			            
			            // Bind closure
			            $('a', print_controls).bind('click', function(e) {
			                e.preventDefault();
			                if ($(this).hasClass('print')) { window.print(); }
			                // else { $.printPreview.distroyPrintPreview(); }
			                else {  history.back(-1);  }
			            });
			    	},
			    	
			    	distroyPrintPreview: function() { window.close();
			    	    print_controls.fadeOut(100);
			    	    print_modal.animate({ top: $(window).scrollTop() - $(window).height(), opacity: 1}, 400, 'linear', function(){
			    	        print_modal.remove();
			    	        $('body').css({overflowY: 'auto', height: 'auto'});
			    	    });
			    	    mask.fadeOut('slow', function()  {
			    			mask.remove();
			    		});				

			    		$(document).unbind("keydown.printPreview.mask");
			    		mask.unbind("click.printPreview.mask");
			    		$(window).unbind("resize.printPreview.mask");
				    },
				    
			    	/* -- Mask Functions --*/
				    loadMask: function() {
				        size = $.printPreview.sizeUpMask();
			            mask = $('<div id="print-modal-mask" />').appendTo($('body'));
			    	    mask.css({				
			    			position:           'absolute', 
			    			top:                0, 
			    			left:               0,
			    			width:              size[0],
			    			height:             size[1],
			    			display:            'none',
			    			opacity:            0,					 		
			    			zIndex:             9999,
			    			backgroundColor:    '#000'
			    		});
				
			    		mask.css({display: 'block'}).fadeTo('400', 0.75);
			    		
			            $(window).bind("resize..printPreview.mask", function() {
							$.printPreview.updateMaskSize();
						});
						
						mask.bind("click.printPreview.mask", function(e)  {
							$.printPreview.distroyPrintPreview();
						});
						
						$(document).bind("keydown.printPreview.mask", function(e) {
						    if (e.keyCode == 27) {  $.printPreview.distroyPrintPreview(); }
						});
			        },
			    
			        sizeUpMask: function() {
			            if ($.browser.msie) {
			            	// if there are no scrollbars then use window.height
			            	var d = $(document).height(), w = $(window).height();
			            	return [
			            		window.innerWidth || 						// ie7+
			            		document.documentElement.clientWidth || 	// ie6  
			            		document.body.clientWidth, 					// ie6 quirks mode
			            		d - w < 20 ? w : d
			            	];
			            } else { return [$(document).width(), $(document).height()]; }
			        },
			    
			        updateMaskSize: function() {
			    		var size = $.printPreview.sizeUpMask();
			    		mask.css({width: size[0], height: size[1]});
			        }
			    }
			})(jQuery);
		</script>

		<script type="text/javascript">
			$(function()
			{
				$("#feature > div").scrollable({interval: 2000}).autoscroll();

				$('#aside').prepend('<a class="print-preview">Cetak </a>');
				$('a.print-preview').printPreview();

				//$(document).bind('keydown', function(e) {
				var code = 80;
				//if (code == 80 && !$('#print-modal').length) {
				$.printPreview.loadPrintPreview();
				//return false;
				//}
				//});
			});
		</script>
	</head>

