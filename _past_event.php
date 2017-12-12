<?php
$img_path = '/images/past_event/';
$videos = [
    [
        'number' => '0',
        'name' => 'Видеоотчет Droidcon Moscow 2017',
        'url' => 'https://www.youtube.com/embed/1yoBb420urA',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '1',
        'name' => 'Александр Блинов «Keynote: Проектирование библиотек. НАЧАЛО»',
        'url' => 'https://www.youtube.com/embed/gQmpal8KI-U',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '2',
        'name' => 'Александр Ефременков «Invokedynamic in Oreo»',
        'url' => 'https://www.youtube.com/embed/zpwAuRnOPQA',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '3',
        'name' => 'Павел Гвай, Никита Русин «Google Assistant Actions»',
        'url' => 'https://www.youtube.com/embed/33AqlBTY-4k',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '4',
        'name' => 'Вадим Митякин «Способы взаимодействия проектировщиков и команды разработки мобильных приложений»',
        'url' => 'https://www.youtube.com/embed/-nHOuF1bjQc',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '5',
        'name' => 'Иван Алякскин «Security etiquette/android view: Доклад»',
        'url' => 'https://www.youtube.com/embed/vWdyewAOR_A',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '6',
        'name' => 'Роман Рыжков «Дизайн для продуктов и бизнеса своими руками»',
        'url' => 'https://www.youtube.com/embed/QkU_owLzO8A',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '7',
        'name' => 'Марина Мичкова «Решения Яндекса для монетизации мобильных приложений»',
        'url' => 'https://www.youtube.com/embed/vLJAHqgB_z8',
        'image' => '002_preview.jpg',
    ],
    [
        'number' => '8',
        'name' => 'Павел Лепеев «Оптимизация мобильных приложений для десктопного режима»',
        'url' => 'https://www.youtube.com/embed/izNPNZ3OvDA',
        'image' => '002_preview.jpg',
    ],           
];

$presentations = [
    [
        'number' => '0',
        'title' => 'Мобильная платформа 1С - средство быстрой разработки кросс-платформенных мобильных приложений',
        'author' => 'Петр Грибанов',
        'url' => 'https://yadi.sk/i/hX82uXPM3QVsqd',
    ],
    [
        'number' => '1',
        'title' => 'Invokedynamic in Oreo',
        'author' => 'Александр Ефременков',
        'url' => 'https://yadi.sk/i/FgikEmjB3QVsoZ',
    ],
    [
        'number' => '2',
        'title' => 'Оптимизация мобильных приложений для десктопного режима',
        'author' => 'Павел Лепеев',
        'url' => 'https://yadi.sk/i/bL84JQkT3QVsrv',
    ],
    [
        'number' => '3',
        'title' => 'Keynote: Проектирование библиотек. НАЧАЛО',
        'author' => 'Александр Блинов',
        'url' => 'https://yadi.sk/d/_VmUOq4F3QVssp',
    ],
    [
        'number' => '4',
        'title' => 'Стратегия рефакторинга в Android-приложении',
        'author' => 'Владимир Иванов',
        'url' => 'https://yadi.sk/i/L65UjIqd3QVsu2',
    ], 
    [
        'number' => '5',
        'title' => 'Google Assistant Actions',
        'author' => 'Павел Гвай, Никита Русин',
        'url' => 'https://yadi.sk/i/PGdsWTfT3QVsBM',
    ],
    [
        'number' => '6',
        'title' => 'RxPM — реактивная реализация паттeрна Presentation Model',
        'author' => 'Дмитрий Горбунов',
        'url' => 'https://yadi.sk/i/5OM0Bevw3QVsAR',
    ], 
    [
        'number' => '7',
        'title' => 'Способы взаимодействия проектировщиков и команды разработки мобильных приложений',
        'author' => 'Вадим Митякин',
        'url' => 'https://yadi.sk/i/usv5_8133QVsC3',
    ],
    [
        'number' => '8',
        'title' => 'Security etiquette/android view: Доклад',
        'author' => 'Иван Алякскин',
        'url' => 'https://yadi.sk/i/dmTiqYL83QVtpM',
    ],           
];

?>

<a class="menuancor" id="videos"></a>

<section id="Sec_past_event">
    <div class="container">
        <h2>КАК ЭТО БЫЛО</h2>  
        <?php if (count($videos) >= 1): ?> 
        <div class="row row_video_preview">

            <?php foreach ($videos as $key => $video): ?>
                <div class="item_video_preview col-lg-4 col-md-4 col-sm-6 col-xs-12">
                    <div class="inner_item_video" style="background: url('<?= $img_path.$video['image']; ?>') no-repeat bottom center;">
                        <img onClick="toggleVideo<?= $video['number']; ?>();" src="/images/past_event/play.png" />
                    </div> 
                    <p><?= $video['name']; ?><p>
                    <!-- popup and contents -->
                    <div id="popupVid_<?= $video['number']; ?>" style="display:none;" class="pop_up_window">
                        <div class="btn_close_container">
                            <div onClick="toggleVideo<?= $video['number']; ?>('hide');">&nbsp;</div>
                        </div>
                        <div class="iframe_container">
                            <iframe src="<?= $video['url']; ?>?enablejsapi=1" frameborder="0" allowfullscreen></iframe> 
                        </div>                      
                    </div>
                    <script>
                        function toggleVideo<?= $video['number']; ?>(state) {
                            //code for hiding other opened windows & videos
                            var other_divs = document.getElementsByClassName("pop_up_window");                            
                            var other_iframe = [];     

                            for (var i=0, len=other_divs.length; i<len; i++) {                                
                                other_iframe[i] = other_divs[i].getElementsByTagName("iframe")[0].contentWindow; 
                                other_iframe[i].postMessage('{"event":"command","func":"pauseVideo","args":""}', '*');
                                other_divs[i].style.display = 'none';
                            }

                            // if state == 'hide', hide. Else: show video
                            var div = document.getElementById("popupVid_<?= $video['number']; ?>");
                            var iframe = div.getElementsByTagName("iframe")[0].contentWindow;
                            div.style.display = state == 'hide' ? 'none' : '';
                            func = state == 'hide' ? 'pauseVideo' : 'playVideo';
                            iframe.postMessage('{"event":"command","func":"' + func + '","args":""}', '*');
                        }
                    </script>
                </div>
                
            <?php endforeach; ?>
                
        </div>
        <?php endif; ?>      

        <?php if (count($presentations) >= 1): ?>
            <div class="row row_presentations">  
                <?php foreach ($presentations as $key => $presentation): ?>
                    <div class="item_presentation col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        <a class="inner_img_cont" href="<?= $presentation['url']; ?>" target="_blank">
                            <?= $presentation['author']; ?><br /><span>«<?= $presentation['title']; ?>»</span>     
                        </a>
                    </div> 
                <?php endforeach; ?>        
            </div>
        <?php endif; ?>        
        
        <div class="row row_galleries"> 
            <div class="item_gallery">
                Смотрите фотографии с мероприятия на нашем аккаунте в <a href="https://www.facebook.com/pg/Apps4All/photos/?tab=album&album_id=1662298847165471" target="_blank">facebook</a> и <a href="https://vk.com/album-32444825_249421745" target="_blank">vk</a>!
            </div>
        </div> 

    </div>
</section>