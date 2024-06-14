<?php 

    include_once '../../../BLL/Character.BLL.php'; 
    use BLL\Character;

    include_once '../../../BLL/Attribute.BLL.php'; 
    use BLL\Attribute;
    

    $id = $_GET['id'];

    $acao = $_GET['acao'];

    $character =  \BLL\Character::SelectById($id);
    $attribute = \BLL\Attribute::SelectById($character->getIdAttribute());

    if($acao == 1) {
        $attribute->setStrength($attribute->getStrength()+2);
        $attribute->setVitality($attribute->getVitality()+1);
        $dano = rand(10, 30);
        $xp = rand(20, 60);
        $xp /= $character->getLevel();
        $character->setXp($character->getXp()+$xp);
        $character->setVidaAtual(($character->getVidaAtual()-$dano) > 0 ? ($character->getVidaAtual()-$dano) : 0);
        $character->setVida(($attribute->getVitality()*5)+100);
        $character->setHistorico("{$character->getHistorico()};Golpeou uma arvore e recebeu {$dano}, mas ganhou {$xp} de xp");
    } else if($acao == 2) {
        $xp = rand(5, 40);
        $cura = rand(10, 50);
        $xp /= $character->getLevel();
        $character->setXp($character->getXp()+$xp);
        $attribute->setMind($attribute->getMind()+2);
        $attribute->setIntelligence($attribute->getMind()+1);
        $character->setVidaAtual($character->getVidaAtual()+5 > $character->getVida() ? $character->getVida() : $character->getVidaAtual()+$cura);
        $character->setHistorico("{$character->getHistorico()};Meditou e recebeu {$cura} de cura e tambem ganhou {$xp} de xp");
    } else if($acao == 3) {
        $xp = rand(15, 30);
        $dano = rand(3, 10);
        $xp /= $character->getLevel();
        $character->setXp($character->getXp()+$xp);
        $attribute->setDexterity($attribute->getDexterity()+2);
        $attribute->setVitality($attribute->getVitality()+1);
        $character->setVidaAtual(($character->getVidaAtual()-$dano) > 0 ? ($character->getVidaAtual()-$dano) : 0);
        $character->setVida(($attribute->getVitality()*5)+100);
        $character->setHistorico("{$character->getHistorico()};Correu ate cansar e recebeu {$dano} de cura e tambem ganhou {$xp} de xp");
    } else if($acao == 4) {
        $xp = rand(60, 180);
        $cura = rand(5, 15);
        $xp /= $character->getLevel();
        $character->setXp($character->getXp()+$xp);
        $attribute->setIntelligence($attribute->getIntelligence()+3);
        $character->setVidaAtual(($character->getVidaAtual()+$cura) > $character->getVida() ? $character->getVida() : ($character->getVidaAtual()+$cura));
        $character->setHistorico("{$character->getHistorico()};Estudou e recebeu {$xp} de xp/conhecimento e se curou {$cura}");
    } else if($acao == 5) {
        if($character->getXp() >= $character->getXpNecessario()) {
            $character->setLevel($character->getLevel()+1);
            $character->setVidaAtual($character->getVida());
            $attribute->setPontos($attribute->getPontos()+1);
            $character->setXp(($character->getXp()-$character->getXpNecessario()));
            $character->setXpNecessario(($character->getXpNecessario()*1.5));
            $character->setHistorico("{$character->getHistorico()};Apos um longo descanso, levantou-se novamente com sua vida completa e com um ponto livre");
        }
    }

    if($character->getVidaAtual() <= 0) {
        \BLL\Character::Delete($id);
        header("Location: ../gameplay/dead.php");
    } else {
        \BLL\Attribute::Update($attribute);
        \BLL\Character::Update($character);

        header("Location: ../gameplay/gameplay.php?id={$character->getId()}");
    }

?>

