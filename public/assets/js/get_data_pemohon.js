var protocol = window.location.protocol;
var host = window.location.hostname;

function showDataTable(link) {
    $("#datapemohon").DataTable({
        "processing": true,
        "serverSide": true,
        "searching": true,
        "scrollX": true,
        "order":[],  
        "ajax":{  
            "url": link,  
            "type": "POST",
            // "dataSrc": function ( data ) {
            //     console.log( JSON.stringify(data));
            //  }
        },  
        "columnDefs":[  
            {  
                "width": "10",
                "targets":0,  
                "orderable":false,  
                "class":"text-center" 
            }, 
            {  
                "targets":1,  
                "orderable":false, 
                "class":"no-wrap" 
            }, 
            {  
                "targets":2,  
                "class":"text-center" 
            }, 
            {  
                "targets":3,  
                "class":"text-center" 
            },  
            {  
                "width": "150",
                "targets":5
            },
            {  
                "width": "150",
                "targets":6
            },
            {  
                "width": "150",
                "targets":7
            },  
            {  
                "width": "150",
                "class":"text-center",
                "targets":8
            },
        ],  
        "pageLength": 10
    });
}
