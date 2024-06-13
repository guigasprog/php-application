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
        $character->setXp($character->getXp()+(20/$character->getLevel()));
        $attribute->setStrength($attribute->getStrength()+2);
        $attribute->setVitality($attribute->getVitality()+1);
        $character->setVidaAtual(($character->getVidaAtual()-30) > 0 ? ($character->getVidaAtual()-30) : 0);
        $character->setVida(($attribute->getVitality()*5)+100);
    } else if($acao == 2) {
        $character->setXp($character->getXp()+(10/$character->getLevel()));
        $attribute->setMind($attribute->getMind()+2);
        $attribute->setIntelligence($attribute->getMind()+1);
        $character->setVidaAtual($character->getVidaAtual()+5 > $character->getVida() ? $character->getVida() : $character->getVidaAtual()+5);
    } else if($acao == 3) {
        $character->setXp($character->getXp()+(5/$character->getLevel()));
        $attribute->setDexterity($attribute->getDexterity()+2);
        $attribute->setVitality($attribute->getVitality()+1);
        $character->setVida(($attribute->getVitality()*5)+100);
    } else if($acao == 4) {
        $character->setXp($character->getXp()+(30/$character->getLevel()));
        $attribute->setIntelligence($attribute->getMind()+3);
        $character->setVidaAtual($character->getVidaAtual()+5 > $character->getVida() ? $character->getVida() : $character->getVidaAtual()+5);
    } else if($acao == 5) {
        if($character->getXp() >= $character->getXpNecessario()) {
            $attribute->setPontos($attribute->getPontos()+1);
            $character->setXp(($character->getXp()-$character->getXpNecessario()));
            $character->setXpNecessario(($character->getXpNecessario()*1.5));
        }
    }

    if($character->getVidaAtual() <= 0) {
        \BLL\Character::Delete($id);
        header("Location: http://localhost:80/php-application/VIEW/game/gameplay/dead.php");
    } else {
        \BLL\Attribute::Update($attribute);
        \BLL\Character::Update($character);

        header("Location: http://localhost:80/php-application/VIEW/game/gameplay/gameplay.php?id={$character->getId()}");
    }

?>

