<?php
function print_level_card($level_num, $text)
{
?>
  <div class="relative w-full">

    <img src="/wp-content/uploads/2024/02/Level-<?= $level_num ?>.png" alt="dxbskating Rolling Class Level 1" class="absolute top-0 left-1/2 -translate-x-1/2 -translate-y-1/2 w-[120px] aspect-square object-contain object-center z-10">

    <p class="relative p-6 pt-20 text-xl text-center duration-500 bg-white border rounded-lg shadow-xl cursor-default text-neutral-700">
      <?= $text ?>
    </p>
  </div>
<?php
}
?>
<!-- Levels -->
<section id="levels" class="relative py-24 text-white bg-blue-500 md:py-32">
  <!-- WavySectionEdge -->
  <svg class="absolute left-0 z-10 w-full -mb-px fill-blue-500 bottom-full" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 55">
    <path d="M1889.834 40.831c-14.51 0-21.861-6.63-28.971-13.043-7.29-6.575-14.175-12.785-28.301-12.785s-21.012 6.21-28.301 12.785c-7.109 6.413-14.461 13.043-28.971 13.043s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.01 6.21-28.299 12.785c-7.108 6.413-14.46 13.043-28.969 13.043s-21.859-6.63-28.968-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.01 6.21-28.299 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.858-6.63-28.967-13.042c-7.289-6.575-14.174-12.786-28.298-12.786s-21.011 6.21-28.3 12.785c-7.109 6.413-14.461 13.043-28.971 13.043s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.786c-7.109 6.412-14.46 13.042-28.969 13.042s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.859-6.63-28.969-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.86-6.63-28.969-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.009 6.21-28.298 12.785c-7.108 6.413-14.459 13.043-28.968 13.043s-21.86-6.63-28.969-13.042c-7.289-6.575-14.174-12.786-28.299-12.786s-21.01 6.21-28.299 12.785c-7.109 6.413-14.46 13.043-28.969 13.043s-21.861-6.63-28.97-13.043c-7.29-6.575-14.174-12.785-28.3-12.785s-21.01 6.21-28.299 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.86-6.63-28.969-13.042c-7.289-6.575-14.174-12.786-28.299-12.786s-21.009 6.21-28.298 12.785c-7.109 6.413-14.459 13.043-28.969 13.043s-21.859-6.63-28.968-13.043c-7.289-6.575-14.173-12.785-28.298-12.785s-21.009 6.21-28.297 12.785c-7.109 6.413-14.459 13.043-28.968 13.043s-21.859-6.63-28.968-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.011 6.21-28.3 12.786c-7.109 6.412-14.46 13.042-28.969 13.042s-21.859-6.63-28.968-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.008 6.21-28.297 12.785c-7.108 6.413-14.459 13.043-28.967 13.043s-21.86-6.63-28.969-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.008 6.21-28.297 12.785c-7.108 6.413-14.459 13.043-28.967 13.043s-21.859-6.63-28.967-13.043C21.008 21.213 14.124 15.003 0 15.003V55h1920V26.713l-1.195 1.075c-7.109 6.413-14.461 13.043-28.971 13.043Z"></path>
  </svg>
  <div class="wrapper">
    <div class="box">
      <!-- Heading -->
      <h2 class="mb-24 text-center heading md:mb-32">
        Выбери свой уровень
      </h2>
      <!-- Cards -->
      <div class="grid gap-12 gap-y-24 justify-items-center md:gap-24 md:grid-cols-2">
        <!-- Card 1 -->
        <?php
        print_level_card(
          1,
          '
            Этот курс подходит для тех , кто только начал делать свои первые шаги в роллер спорте и не понимает почему все так сложно. Мы подробно изучим основы безопасного катания, узнаем какие существуют стили катания, научимся двигаться по прямой, тормозить и делать повороты.
            <br>
            <br><strong>Подходит для:</strong>
            <br>• Абсолютных новичков                    
          '
        );
        print_level_card(
          2,
          '
            Если у вас есть опыт самостоятельного катания на роликовых коньках, но простого движения по прямой уже не достаточно, а спуск с горы вызывает паническую атаку, то вам подойдут тренировки второго уровня. В этой части вы освоите прохождения типичных городских препятствий, экстренное торможение, увеличение скорости катания лицом и спиной вперёд.
            <br>
            <br><strong>Подходит для:</strong>
            <br>•Любителей с самостоятельным  опытом катания на роликовых коньках 
            <br>• Тех, кто хочет уверенно и главное безопасно перемещаться по городу
            <br>• Роллеры , завершившие уровень 1
            
          '
        );
        print_level_card(
          3,
          '
            Этот курс наполнен трюками, скоростью и полной свободой. После него вы будете думать не о том как проехать препятствие, а том - «какой трюк здесь можно сделать?».
            <br>
            <br><strong>Подходит для:</strong>
            <br>• Тех, кто решил довести технику до профессионального уровня
            <br>• Тех, кто хочет понимать чем отличается трюк mute от method grab
            <br>• Роллеры , завершившие уровень 2
          '
        );
        print_level_card(
          4,
          '
            Когда незнакомые люди бросают взгляды восхищения на ваше идеальное катание, а ветер в волосах напоминает о преисполненности в своём познании,  то это означает лишь одно - вы становитесь профессионалом. Этот курс не имеет конца и рассчитан на достижение самых высоких целей. Разделяется на две специализации: спидскейтинг и скейтпарк.
            <br>
            <br><strong>Подходит для:</strong>
            <br>• Продвинутых роллеров, которые изучают сложные трюки
            <br>• Атлеты которые хотят выступать на соревнованиях по спидскейтингу
            <br>• Роллеры , завершившие уровень 3
          '
        );
        ?>

      </div>
    </div>
  </div>
  <!-- WavySectionEdge -->
  <svg class="absolute left-0 z-10 w-full -mt-px rotate-180 fill-blue-500 top-full" aria-hidden="true" focusable="false" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1920 55">
    <path d="M1889.834 40.831c-14.51 0-21.861-6.63-28.971-13.043-7.29-6.575-14.175-12.785-28.301-12.785s-21.012 6.21-28.301 12.785c-7.109 6.413-14.461 13.043-28.971 13.043s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.01 6.21-28.299 12.785c-7.108 6.413-14.46 13.043-28.969 13.043s-21.859-6.63-28.968-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.01 6.21-28.299 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.858-6.63-28.967-13.042c-7.289-6.575-14.174-12.786-28.298-12.786s-21.011 6.21-28.3 12.785c-7.109 6.413-14.461 13.043-28.971 13.043s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.786c-7.109 6.412-14.46 13.042-28.969 13.042s-21.86-6.63-28.97-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.859-6.63-28.969-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.011 6.21-28.3 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.86-6.63-28.969-13.043c-7.289-6.575-14.174-12.785-28.299-12.785s-21.009 6.21-28.298 12.785c-7.108 6.413-14.459 13.043-28.968 13.043s-21.86-6.63-28.969-13.042c-7.289-6.575-14.174-12.786-28.299-12.786s-21.01 6.21-28.299 12.785c-7.109 6.413-14.46 13.043-28.969 13.043s-21.861-6.63-28.97-13.043c-7.29-6.575-14.174-12.785-28.3-12.785s-21.01 6.21-28.299 12.785c-7.109 6.413-14.46 13.043-28.97 13.043s-21.86-6.63-28.969-13.042c-7.289-6.575-14.174-12.786-28.299-12.786s-21.009 6.21-28.298 12.785c-7.109 6.413-14.459 13.043-28.969 13.043s-21.859-6.63-28.968-13.043c-7.289-6.575-14.173-12.785-28.298-12.785s-21.009 6.21-28.297 12.785c-7.109 6.413-14.459 13.043-28.968 13.043s-21.859-6.63-28.968-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.011 6.21-28.3 12.786c-7.109 6.412-14.46 13.042-28.969 13.042s-21.859-6.63-28.968-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.008 6.21-28.297 12.785c-7.108 6.413-14.459 13.043-28.967 13.043s-21.86-6.63-28.969-13.043c-7.289-6.575-14.174-12.785-28.298-12.785s-21.008 6.21-28.297 12.785c-7.108 6.413-14.459 13.043-28.967 13.043s-21.859-6.63-28.967-13.043C21.008 21.213 14.124 15.003 0 15.003V55h1920V26.713l-1.195 1.075c-7.109 6.413-14.461 13.043-28.971 13.043Z"></path>
  </svg>
</section>