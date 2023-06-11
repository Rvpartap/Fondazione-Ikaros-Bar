// specify variable based on CSS classes
const selectBox = document.querySelector(".select-box"),
  selectBtnX = selectBox.querySelector(".options .playerX"),
  selectBtnO = selectBox.querySelector(".options .playerO"),
  playBoard = document.querySelector(".play-board"),
  players = document.querySelector(".players"),
  allBox = document.querySelectorAll("section span"),

  resultBox = document.querySelector(".result-box"),
  wonText = resultBox.querySelector(".won-text"),
  replayBtn = resultBox.querySelector("button");

window.onload = () => {
  // make sure all the boxes in the board are clickable
  for (let i = 0; i < allBox.length; i++) {
    allBox[i].setAttribute("onclick", "clickedBox(this)");
  }
}

selectBtnX.onclick = () => {
  selectBox.classList.add("hide");
  playBoard.classList.add("show");
}

selectBtnO.onclick = () => {
  selectBox.classList.add("hide");
  playBoard.classList.add("show");
  players.setAttribute("class", "players active player");
}

let playerXIcon = "fas fa-times", playerOIcon = "far fa-circle", playerSign = "X", runBot = true;

// user interaction with the board
function clickedBox(element) {
  if (players.classList.contains("player")) {
    playerSign = "O";
    element.innerHTML = `<i class="${playerOIcon}"></i>`;
    players.classList.remove("active");
    element.setAttribute("id", playerSign);
  } else {
    element.innerHTML = `<i class="${playerXIcon}"></i>`;
    element.setAttribute("id", playerSign);
    players.classList.add("active");
  }
  selectWinner();
  element.style.pointerEvents = "none";
  playBoard.style.pointerEvents = "none";

  // buffer time to pretend that the AI's thinking
  let randomTimeDelay = ((Math.random() * 1000) + 200).toFixed();
  setTimeout(() => {
    bot(runBot);
  }, randomTimeDelay);
}

// computer interaction with the board
function bot() {
  let array = [];
  if (runBot) {
    playerSign = "O";
    minimax(0, playerSign, -Infinity, Infinity);
    let index = getBestMove();
    allBox[index].innerHTML = `<i class="${playerOIcon}"></i>`;
    allBox[index].setAttribute("id", playerSign);
    selectWinner();
    allBox[index].style.pointerEvents = "none";
    playBoard.style.pointerEvents = "auto";
    playerSign = "X";
  }
}

// get the sign of a certain box
function getIdVal(classname) {
  return document.querySelector(".box" + classname).id;
}

// check 3 tiles to see if they are the same
function checkIdSign(val1, val2, val3, sign) {
  if (getIdVal(val1) == sign && getIdVal(val2) == sign && getIdVal(val3) == sign) {
    return true;
  }
  return false;
}

// check winner
function selectWinner() {
  if (
    checkIdSign(1, 2, 3, playerSign) ||
    checkIdSign(4, 5, 6, playerSign) ||
    checkIdSign(7, 8, 9, playerSign) ||
    checkIdSign(1, 4, 7, playerSign) ||
    checkIdSign(2, 5, 8, playerSign) ||
    checkIdSign(3, 6, 9, playerSign) ||
    checkIdSign(1, 5, 9, playerSign) ||
    checkIdSign(3, 5, 7, playerSign)
  ) {
    runBot = false;
    bot(runBot);

    // buffer time
    setTimeout(() => {
      resultBox.classList.add("show");
      playBoard.classList.remove("show");
    }, 700);
    wonText.innerHTML = `Player ${playerSign}<br> ha vinto la partita!`;
  } else {
    // if the board is full
    if (
      getIdVal(1) != "" &&
      getIdVal(2) != "" &&
      getIdVal(3) != "" &&
      getIdVal(4) != "" &&
      getIdVal(5) != "" &&
      getIdVal(6) != "" &&
      getIdVal(7) != "" &&
      getIdVal(8) != "" &&
      getIdVal(9) != ""
    ) {
      runBot = false;
      bot(runBot);

      // buffer time for showing the match has been drawn
      setTimeout(() => {
        resultBox.classList.add("show");
        playBoard.classList.remove("show");
      }, 700);
      wonText.textContent = "La partita è stata pareggiata!";
    }
  }
}

// reload page when replay button is clicked
replayBtn.onclick = () => {
  window.location.reload();
}

// Minimax algorithm
function minimax(depth, currentSign, alpha, beta) {
  if (
    checkIdSign(1, 2, 3, playerOIcon) ||
    checkIdSign(4, 5, 6, playerOIcon) ||
    checkIdSign(7, 8, 9, playerOIcon) ||
    checkIdSign(1, 4, 7, playerOIcon) ||
    checkIdSign(2, 5, 8, playerOIcon) ||
    checkIdSign(3, 6, 9, playerOIcon) ||
    checkIdSign(1, 5, 9, playerOIcon) ||
    checkIdSign(3, 5, 7, playerOIcon)
  ) {
    return 1 - depth / 10;
  } else if (
    checkIdSign(1, 2, 3, playerXIcon) ||
    checkIdSign(4, 5, 6, playerXIcon) ||
    checkIdSign(7, 8, 9, playerXIcon) ||
    checkIdSign(1, 4, 7, playerXIcon) ||
    checkIdSign(2, 5, 8, playerXIcon) ||
    checkIdSign(3, 6, 9, playerXIcon) ||
    checkIdSign(1, 5, 9, playerXIcon) ||
    checkIdSign(3, 5, 7, playerXIcon)
  ) {
    return depth / 10 - 1;
  } else if (
    getIdVal(1) != "" &&
    getIdVal(2) != "" &&
    getIdVal(3) != "" &&
    getIdVal(4) != "" &&
    getIdVal(5) != "" &&
    getIdVal(6) != "" &&
    getIdVal(7) != "" &&
    getIdVal(8) != "" &&
    getIdVal(9) != ""
  ) {
    return 0;
  }

  let moves = [];
  let scores = [];

  for (let i = 0; i < allBox.length; i++) {
    if (allBox[i].getAttribute("id") === "") {
      moves.push(i);
      allBox[i].setAttribute("id", currentSign);

      if (currentSign === playerOIcon) {
        let score = minimax(depth + 1, playerXIcon, alpha, beta);
        scores.push(score);
        alpha = Math.max(alpha, score);
      } else {
        let score = minimax(depth + 1, playerOIcon, alpha, beta);
        scores.push(score);
        beta = Math.min(beta, score);
      }

      allBox[i].setAttribute("id", "");
      if (alpha >= beta) {
        break;
      }
    }
  }

  return currentSign === playerOIcon ? Math.max(...scores) : Math.min(...scores);
}

function getBestMove() {
  let bestScore = -Infinity;
  let bestMove;
  for (let i = 0; i < allBox.length; i++) {
    if (allBox[i].getAttribute("id") === "") {
      allBox[i].setAttribute("id", playerOIcon);
      let score = minimax(0, playerXIcon, -Infinity, Infinity);
      allBox[i].setAttribute("id", "");
      if (score > bestScore) {
        bestScore = score;
        bestMove = i;
      }
    }
  }
  return bestMove;
}
