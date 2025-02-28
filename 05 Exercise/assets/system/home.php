<?php include_once "./header.php" ?>

<div class="container py-5">
        <h3 class="text-primary text-uppercase">Include & Include_once &mdash;</h3>

       <details>
            <summary> Include &mdash;</summary>
            <p class="text-muted"> Inlcude acts as copy code to destination.It can pass when the code has error. Muli copy is allowed &mdash;</p>
       </details>

       <details>
            <summary> Include_once &mdash;</summary>
            <p class="text-muted"> Inlcude acts as copy code to destination.It can pass when the code has error. Muli copy doesn't allow &mdash;</p>
       </details>



       <h3 class="text-primary text-uppercase">Require & Require_once &mdash;</h3>

       <details>
            <summary> Require &mdash;</summary>
            <p class="text-muted"> Require acts as copy code to destination. It can't pass when the code has error. Muli copy is allowed &mdash;</p>
       </details>

       <details>
            <summary> Require_once &mdash;</summary>
            <p class="text-muted"> Require_once acts as copy code to destination.It can't pass when the code has error. Muli copy doesn't allow &mdash;</p>
       </details>

</div>

<?php include_once "./footer.php" ?>

 