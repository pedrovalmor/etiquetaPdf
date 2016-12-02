<html>
    <head>
        <style>
            p { 
                page-break-after: always; 
                width: 85mm;
                height: 35mm;
                background: whitesmoke;
            }
            /*.footer { position: fixed; bottom: 0px; }
            .pagenum:before { content: counter(page); }*/
        </style>
    </head>
    <body>
      <!--div class="footer">Page: <span class="pagenum"></span></div-->
        <?php
        $nomes = [
            'lorem ipsum ...',
            'lorem ipsum ...'
        ];
        foreach ($nomes as $i => $n) {
            ?>
            <p><?= $n . ' - ' . $i ?></p>
            <?php
        }
        ?>
    </body>
</html>
