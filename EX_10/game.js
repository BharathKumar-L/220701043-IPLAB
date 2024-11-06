$(document).ready(function () {
    let score = 0;
  
    const gameArea = $('#game-area');
    const gameAreaWidth = gameArea.width();
    const gameAreaHeight = gameArea.height();
  
    function getRandomColor() {
      const letters = '0123456789ABCDEF';
      let color = '#';
      for (let i = 0; i < 6; i++) {
        color += letters[Math.floor(Math.random() * 16)];
      }
      return color;
    }
  
    function getRandomLetter() {
      const code = Math.floor(Math.random() * (90 - 65 + 1)) + 65;
      return String.fromCharCode(code);
    }
  
    function createBubble() {
      const bubble = $('<div class="bubble"></div>');
      const letter = getRandomLetter();
      bubble.text(letter);
      bubble.css({
        backgroundColor: getRandomColor(),
        top: Math.random() * (gameAreaHeight - 50) + 'px',
        left: Math.random() * (gameAreaWidth - 50) + 'px'
      });
      bubble.attr('data-letter', letter);
      gameArea.append(bubble);
  
      setTimeout(() => {
        bubble.remove();
      }, 3000);
    }
  
    setInterval(createBubble, 1000);
  
    $(document).keydown(function (e) {
      const pressedKey = String.fromCharCode(e.which);
      const bubble = $(`.bubble[data-letter="${pressedKey}"]`);
      if (bubble.length) {
        bubble.remove();
        score += 10;
        $('#score span').text(score);
      }
    });
  });
  