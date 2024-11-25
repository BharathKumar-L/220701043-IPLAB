$(document).ready(function () {
    let score = 0;
    let gameOver = false;

    const player = $('#player');
    const obstacle = $('#obstacle');

    const moveObstacle = () => {
        obstacle.css({
            left: Math.random() * 300 + 'px',
            top: '0px'
        }).animate({ top: '400px' }, 2000, function () {
            if (!gameOver) {
                score++;
                $('#score').text(score);
                moveObstacle();
            }
        });
    };

    $(document).on('mousemove', function (event) {
        const x = event.pageX - player.width() / 2;
        const y = event.pageY - player.height() / 2;
        player.css({ top: y, left: x });
    });

    $('#save-score').on('click', function () {
        $.post('save_score.php', { score: score }, function (response) {
            alert(response);
        });
    });

    moveObstacle();
    const detectCollision = () => {
        const playerPos = player.offset();
        const obstaclePos = obstacle.offset();
    
        const playerWidth = player.width();
        const playerHeight = player.height();
    
        const obstacleWidth = obstacle.width();
        const obstacleHeight = obstacle.height();
    
        // Check overlap
        if (
            playerPos.left < obstaclePos.left + obstacleWidth &&
            playerPos.left + playerWidth > obstaclePos.left &&
            playerPos.top < obstaclePos.top + obstacleHeight &&
            playerPos.top + playerHeight > obstaclePos.top
        ) {
            alert("Game Over! Your score: " + score);
            gameOver = true;
        }
    };
    
    setInterval(detectCollision, 50); // Check collision every 50ms
    
});
