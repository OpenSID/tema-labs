    <a class="dropdown-item" name="fb_share" href="http://www.facebook.com/sharer.php?u=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Facebook'>		
    <button type="button" class="btn btn-block btn-alt-success mr-5 mb-5">
        <i class="fa fa-facebook mr-5"></i>Facebook
    </button></a>
    <a class="dropdown-item" href="http://twitter.com/share?source=sharethiscom&text=<?= $single_artikel["judul"];?>%0A&url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI].'&via=ariandii'?>" class="twitter-share-button" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Twitter'>        
    <button type="button" class="btn btn-block btn-alt-info mr-5 mb-5">
        <i class="fa fa-twitter mr-5"></i>Twitter
    </button></a>
	<a class="dropdown-item" href="mailto:?subject=<?= $single_artikel["judul"];?>&body=<?= potong_teks($single_artikel["isi"], 1000);?> ... Selengkapnya di <?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" title='Email'> 
    <button type="button" class="btn btn-block btn-alt-warning mr-5 mb-5">
        <i class="si si-envelope-letter mr-5"></i>Email
    </button></a>
    <a class="dropdown-item" href="https://telegram.me/share/url?url=<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>&text=<?= $single_artikel["judul"];?>%0A" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Telegram'>   
    <button type="button" class="btn btn-block btn-alt-primary mr-5 mb-5">
        <i class="fa fa-bullseye mr-5"></i>Telegram
    </button></a>
    <a class="dropdown-item" href="https://api.whatsapp.com/send?text=<?= $single_artikel["judul"];?>%0A<?= "https://".$_SERVER[HTTP_HOST].$_SERVER[REQUEST_URI]?>" onclick='window.open(this.href,"popupwindow","status=0,height=500,width=500,resizable=0,top=50,left=100");return false;' rel='nofollow' target='_blank' title='Whatsapp'>  
    <button type="button" class="btn btn-block btn-alt-success mr-5 mb-5">
        <i class="fa fa-whatsapp mr-5"></i>Whatsapp
    </button></a>