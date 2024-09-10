<?php
    $url = array(
        'tina-turner/tina-turner-the-best.php',
        'anderson-freire/anderson-freire-raridade.php',
        'maria-marcal/maria-marcal-deserto.php',
        'simone-mendes/simone-mendes-erro-gostoso.php',
        'gabriela-rocha/gabriela-rocha-me-atraiu.php',
    );

    $aleatorio = rand(0,4);
    $dados = file_get_contents($url[$aleatorio]);
    $autor = explode('$author = "',$dados);
    $autor = explode('";',$autor[1]);
    $musica = explode('$music = "',$dados);
    $musica = explode('";',$musica[1]);
    $img = explode('$musicMin = "',$dados);
    $img = explode('";',$img[1]);
?>

<div class="esp-embaixo" id="destaque">
    <a href="/<?php echo $url[$aleatorio];?>">
        <img src="/imagens/<?php echo $img[0];?>.webp" alt="<?php echo $autor[0];?>">
        <div>
            <p id="musica-destaque"><?php echo $musica[0];?></p>
            <p id="autor-destaque"><?php echo $autor[0];?></p>
        </div>
    </a>
</div>

<div id="destaques-min">
    <?php
    $dados = file_get_contents($url[0]);
    $img0 = explode('$musicMin = "',$dados);
    $img0 = explode('";',$img0[1]);

    $dados = file_get_contents($url[1]);
    $img1 = explode('$musicMin = "',$dados);
    $img1 = explode('";',$img1[1]);

    $dados = file_get_contents($url[2]);
    $img2 = explode('$musicMin = "',$dados);
    $img2 = explode('";',$img2[1]);

    $dados = file_get_contents($url[3]);
    $img3 = explode('$musicMin = "',$dados);
    $img3 = explode('";',$img3[1]);

    $dados = file_get_contents($url[4]);
    $img4 = explode('$musicMin = "',$dados);
    $img4 = explode('";',$img4[1]);

    $opcao1 = '
    <div>
        <a href="/'.$url[1].'"><img src="/imagens/'.$img1[0].'.webp" alt="'.$img1[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[2].'"><img src="/imagens/'.$img2[0].'.webp" alt="'.$img2[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[3].'"><img src="/imagens/'.$img3[0].'.webp" alt="'.$img3[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[4].'"><img src="/imagens/'.$img4[0].'.webp" alt="'.$img4[0].'"></a>
    </div>';


    $opcao2 = '
    <div>
        <a href="/'.$url[2].'"><img src="/imagens/'.$img2[0].'.webp" alt="'.$img2[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[3].'"><img src="/imagens/'.$img3[0].'.webp" alt="'.$img3[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[4].'"><img src="/imagens/'.$img4[0].'.webp" alt="'.$img4[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[0].'"><img src="/imagens/'.$img0[0].'.webp" alt="'.$img0[0].'"></a>
    </div>';


    $opcao3 = '
    <div>
        <a href="/'.$url[3].'"><img src="/imagens/'.$img3[0].'.webp" alt="'.$img3[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[4].'"><img src="/imagens/'.$img4[0].'.webp" alt="'.$img4[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[0].'"><img src="/imagens/'.$img0[0].'.webp" alt="'.$img0[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[1].'"><img src="/imagens/'.$img1[0].'.webp" alt="'.$img1[0].'"></a>
    </div>';


    $opcao4 = '
    <div>
        <a href="/'.$url[4].'"><img src="/imagens/'.$img4[0].'.webp" alt="'.$img4[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[0].'"><img src="/imagens/'.$img0[0].'.webp" alt="'.$img0[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[1].'"><img src="/imagens/'.$img1[0].'.webp" alt="'.$img1[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[2].'"><img src="/imagens/'.$img2[0].'.webp" alt="'.$img2[0].'"></a>
    </div>';

    $opcao5 = '
    <div>
        <a href="/'.$url[0].'"><img src="/imagens/'.$img0[0].'.webp" alt="'.$img0[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[1].'"><img src="/imagens/'.$img1[0].'.webp" alt="'.$img1[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[2].'"><img src="/imagens/'.$img2[0].'.webp" alt="'.$img2[0].'"></a>
    </div>

    <div>
        <a href="/'.$url[3].'"><img src="/imagens/'.$img3[0].'.webp" alt="'.$img3[0].'"></a>
    </div>';


    if ($aleatorio == 0):
        echo $opcao1;
    elseif($aleatorio == 1):
        echo $opcao2;
    elseif($aleatorio == 2):
        echo $opcao3;
    elseif($aleatorio == 3):
        echo $opcao4;
    else:
        echo $opcao5;
    endif;

    ?>

</div>