<?php
//container...

// ux...

//->
?>
<!-- toggleable button, to, expands "specific" content ...-> -->
<div>
    <button>Save...</button>
    <img src="https://plus.unsplash.com/premium_photo-1661386257356-c17257862be8?q=80&w=1170&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
</div>
<!-- ux... the ui handler ...-> -->
<script class="this">
    const App = {};
    const button = document.getElementsByTagName("button");
    const img = document.getElementsByTagName("img");
//     mycode starts
    App["button"] = button["0"]; // ...
    App["img"] = img["0"]; // ...
    // setter data...
    App["img"]["dataset"]["custom"] = "area"
    console.log(App["img"]["dataset"]["custom"])
    // event next...
    App["button"].addEventListener("click", function () {
        if (App["img"])
            App["img"]["style"]["display"] = "none";
    });

//     my conde ends....

</script>
