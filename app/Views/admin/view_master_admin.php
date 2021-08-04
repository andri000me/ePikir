<?php 
    echo view('komponen/header',$header);
    echo view('admin/menu',$menu);
    if(isset($konten))echo view($konten, $cont);
    echo view('komponen/footer',$footer);
?>