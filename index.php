<!DOCTYPE html>
<html lang="ru">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameLife</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="header.css">
</head>
<body>
    <?php require "header.php"?>
    <main>
    <div class = "container">
        <div class = "mainpage">
        <img src="convey_mainpage.png" alt="pop-cat.gif" class = "conway1">
        <button class = "playbutton">ИГРАТЬ</button>
        <img src="convey_mainpage2.png" alt="pop-cat.gif" class = "conway2">
        </div>

    </div>

    <div class = "bg">
    <div class = "txtHeader" >ИСТОРИЯ</div>
    <div class = "history">
        <div class = "his"> <p class = "txt">Однажды математик Джон Конвей в 1970 году придумал игру, в которуюнельзя играть, однако можно наблюдать, и назвал её "Жизнь".</p>
        <img src="his1.png" class = "hisimg1">
        </div>
        <div class = "his">  
        <img src="his2.png" class = "hisimg2">
        <p class = "txt">Джон Конвей заинтересовался проблемой,
        обозначенной в 40-х годах прошлого века 
        известным математиком Джоном фон Нейманом, 
        который пытался создать гипотетическую машину, 
        способную воспроизводить саму себя.
</p>
        </div>
        <div class = "his"> <p class = "txt">Нейману удалось создать математическую 
        модель такой машины. Джон Конвей упростил 
        сложные правила математической модели фон
        Неймана и на основе их создал игру "Жизнь".</p> 
        <img src="his3.png" class = "hisimg3">
        </div>
    </div>
    <div class = "txtHeader">ПРИМЕНЕНИЕ</div>
    <div class = "application">
        
        <div class = "app"><p class = "txt">Теория клеточных автоматов, связанная 
        с именами фон Неймана и Конрада Цузе, 
        имеет фундаментальное значение для всей науки 
        и многообразное прикладное применение. 
        Начиная с работ Т. Тоффоли и
        Н. Марголуса 80-х гг. [Тоффоли и др. 1991],
        клеточные автоматы (КА) стали использоваться
        в моделях физико-химических процессов. </p> 
        <img src="app1.jpg" class = "appimg1">
        </div>

        <div class = "app">
        <img src="app2.png" class = "appimg2"><p class = "txt">
        К середине 90-х гг. клеточно-автоматное
        моделирование проникло [Pintoetal. 2007] 
        в гуманитарные науки при изучении 
        мультиагентных cистем в урбанистике 
        (толпа, транспортная пробка). 
        Обзорная статья [Ванаг, 1999] В. Ванага 
        по вероятностным КА еще раз
         легитимизировала для отечественных 
        исследователей клеточные автоматы 
        как метод математического моделирования. </p>
        
        </div>

        <div class = "app"><p class = "txt">
        Последнее десятилетие ознаменовалось 
        бумом публикаций в самых разных разделах 
        науки, связанных с КА-моделями [Лобанов, 2010];
        одновременно с этим продолжает развиваться и 
        математическая теория клеточных автоматов.</p>
        <img src="app3.png" class = "appimg3">
        
        </div>

        </div>
        <p class = "txtHeader" id = "r">ПРАВИЛА</p>
</div>
        <div class = "rulesbg">
            <div class = "rules">
            
            <div class = "rcontainer">
            <p class = "r" id = "r1">
            Каждая клетка на этой поверхности 
            имеет 8 соседей окружающих её. 
            
</p>
            <img src="r1.png" class = "rimg1">
</div>
<div class = "rcontainer">
            <p class = "r" id = "r2">
            может находиться в двух состояниях:
            быть «живой» (заполненной) 
            быть «мёртвой» (пустой)
            
</p>
            <img src="r2.png" class = "rimg2">
</div>
<div class = "rcontainer">
            <p class = "r" id = "r3">
            Распределение живых клеток 
            в начале игры называется первым 
            поколением. Каждое следующее 
            поколение рассчитывается на 
            основе предыдущего
            
</p>
            <img src="r3.png" class = "rimg3">
</div>
<div class = "rcontainer">
            <p class = "r" id = "r4">
            В пустой (мёртвой) клетке, с которой 
            соседствуют три живые клетки, 
            зарождается жизнь;
            
</p>
            <img src="r4.png" class = "rimg4">
</div>
<div class = "rcontainer">
            <p class = "r" id = "r5">
            Если у живой клетки есть две или 
            три живые соседки, то эта клетка 
            продолжает жить
            
</p>
            <img src="r5.png" class = "rimg5">
</div>
<div class = "rcontainer">
            <p class = "r" id = "r6">
            Если живых соседей меньше двух 
            или больше трёх, клетка умирает 
            («от одиночества» или 
            «от перенаселённости»).
            
</p>
            <img src="  r6.png" class = "rimg6" >
</div>

        </div>
        </div> 
    </main>
    <?php require "footer.php"?>
</body>
</html>