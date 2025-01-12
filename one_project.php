
    <?php
    include 'components/header.php';
include 'components/database.php';

    ?>
    <link rel="stylesheet" href="one_project.css">
   
  <canvas id="trailCanvas"></canvas>
    <div class="hz">
        <div class="projects">
            <?php
            $id = $_GET["id"];
            if (empty($id) == true) {
                echo "ошибка поиска товара";
            }

            $sql = "SELECT * FROM `projects` WHERE `id` = '$id'";
            $resolt = $conect->query($sql);
            $roo = $resolt->fetch_assoc();
            if ($roo == false) {
                echo "ошибка поиска товара";
            } else {

            ?>
                <div class="project <?php echo  $roo["class"] ?>">
                    <img src="<?= $roo["img"] ?>" alt="<?= $roo["alt"] ?>">
                    <div class="project2">
                        <p><?= $roo["title"] ?></p>
                        <em><?= $roo["category"] ?></em>
                    </div>
                </div>
                <div>
                    <p><?= $roo["description"] ?></p>
                </div>

            <?php
            }
            ?>
    

        </div>
        <canvas id="snowCanvas"></canvas>
    </div>
    
    
        <script>
  const canvas = document.getElementById('trailCanvas');
const ctx = canvas.getContext('2d');
let lastX = null;
let lastY = null;
let trails = [];
let cursorChanged = false; 

// Устанавливаем размеры канваса
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;

// Настройка стиля линии
ctx.lineWidth = 4;  // Толщина линии
ctx.lineCap = 'round';  // Округлые концы линии

// Массив цветов для гирлянды
const colors = ['#FF5733', '#33FF57', '#5733FF', '#FF33A8', '#33A8FF'];

// Флаг для зимнего стиля
let isWinterStyle = false;

// Массив для снежинок
let snowflakes = [];

// Функция для получения координат относительно канваса
function getCanvasCoordinates(e) {
    const rect = canvas.getBoundingClientRect();
    const x = e.clientX - rect.left; // Координаты мыши относительно канваса
    const y = e.clientY - rect.top;
    return { x, y };
}

// Функция для отрисовки линии
function drawTrail(e) {
    const { x, y } = getCanvasCoordinates(e);

    if (lastX !== null && lastY !== null) {
        // Если зимний стиль активирован, выбираем случайный цвет из гирлянды
        const color = isWinterStyle ? colors[Math.floor(Math.random() * colors.length)] : 'gold'; // Золотой, если не зимний стиль

        // Добавляем линию в массив с временем жизни
        trails.push({
            x1: lastX,
            y1: lastY,
            x2: x,
            y2: y,
            opacity: 1, // Начальная непрозрачность
            timestamp: Date.now(),
            color: color // Сохраняем цвет линии
        });
    }

    // Обновляем последние координаты для следующей точки
    lastX = x;
    lastY = y;
}

// Анимация для обновления канваса и рисования линий
function animateTrail() {
    ctx.clearRect(0, 0, canvas.width, canvas.height);  // Очистка канваса

    const currentTime = Date.now();
    const fadeTime = 1000;  // Время исчезновения линии (в миллисекундах)

    // Рисуем все линии с учетом времени жизни
    trails.forEach(trail => {
        const age = currentTime - trail.timestamp;
        const opacity = Math.max(0, 1 - age / fadeTime);  // Постепенное исчезновение

        ctx.beginPath();
        ctx.moveTo(trail.x1, trail.y1);
        ctx.lineTo(trail.x2, trail.y2);

        // Используем сохраненный цвет линии
        ctx.strokeStyle = trail.color;
        ctx.stroke();
    });

    // Убираем линии, которые уже исчезли
    trails = trails.filter(trail => Date.now() - trail.timestamp < fadeTime);

    // Запускаем следующую анимацию
    requestAnimationFrame(animateTrail);
}

// Функция для генерации снежинок
function generateSnowflakes() {
    if (isWinterStyle) {
        // Создаем новые снежинки с вероятностью 10%
        if (Math.random() < 0.1) {
            let size = Math.random() * 3 + 2; // Размер снежинки
            let x = Math.random() * canvas.width; // Начальная позиция по X
            let y = -10; // Начальная позиция по Y (за пределами экрана)
            let speed = Math.random() * 1 + 0.5; // Скорость падения снежинки
            snowflakes.push({ x, y, size, speed });

            // В 10% случаев меняем курсор, если он еще не был изменён
            if (!cursorChanged) {
                changeCursorOnChance();
                cursorChanged = true; // Устанавливаем флаг, что курсор был изменён
            }
        }
    }
}

function resetCursor() {
    cursorChanged = false;
    document.body.style.cursor = "auto"; // Восстанавливаем стандартный курсор
}

// Функция для отрисовки снежинок
function drawSnowflakes() {
    snowflakes.forEach((snowflake, index) => {
        ctx.beginPath();
        ctx.arc(snowflake.x, snowflake.y, snowflake.size, 0, Math.PI * 2);
        ctx.fillStyle = 'white';
        ctx.fill();

        // Обновляем позицию снежинки
        snowflake.y += snowflake.speed;

        // Если снежинка выходит за экран, удаляем ее
        if (snowflake.y > canvas.height) {
            snowflakes.splice(index, 1);
        }
    });
}

// Стартуем анимацию
animateTrail();

// Слушаем событие движения мыши
document.addEventListener('mousemove', function (e) {
    drawTrail(e);
});

// Очистка канваса при изменении размера окна
window.addEventListener('resize', function () {
    canvas.width = window.innerWidth;
    canvas.height = window.innerHeight;
});

// Вероятность переключения на зимний стиль (10%)
if (Math.random() < 0.1) {
    isWinterStyle = true;

    // Изменение фона на зимний
    document.body.style.background = 'linear-gradient(45deg, #87CEEB, #ADD8E6)';

    // Стартуем генерацию снежинок
    setInterval(generateSnowflakes, 100); // Генерация снежинок с интервалом
}

// Анимация снежинок
function animateSnowflakes() {
    if (isWinterStyle) {
        generateSnowflakes(); // Генерируем снежинки
        drawSnowflakes();     // Рисуем снежинки
    }
    requestAnimationFrame(animateSnowflakes); // Повторяем анимацию
}

// Функция для смены курсора с вероятностью 10%
// Функция для смены курсора с вероятностью 10%
function changeCursorOnChance() {
    const randomChance = Math.random() * 100;

    if (randomChance <= randomChance) {
        // Убедитесь, что путь к изображению правильный
        console.log("Меняем курсор на перчатку");
        document.body.style.cursor = "url('perchatka.png') 16 16, auto"; // Курсор с изображением
    } else {
        console.log("Курсор не меняется");
    }
}

// Проверка на изменение курсора при движении мыши





animateSnowflakes();

    </script>
<?php
include 'components/footer.php';
?>