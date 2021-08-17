
//////사용 변수 설정하기

//전역함수
const GAME_TIME = 8;
let score = 0;
let time = GAME_TIME;
let isPlaying = false;
let timeInterval;
let checkInterval;
let words = [];

const wordInput = document.querySelector('.word-input');
const wordDisplay = document.querySelector('.word-display');
const scoreDisplay = document.querySelector('.score');
const timeDisplay = document.querySelector('.time');
const button = document.querySelector('.button');

alert ('어서오세요 준현씨. 게임시작 버튼을 클릭 후 단어를 타이핑 하세요.')

init();

function init() {
    getWords()   //단어 불러오기
    
    // input창에 단어를 넣을때 인식하게끔
    wordInput.addEventListener('input', checkMatch);
}



// 게임 실행
function run() {
    if(isPlaying) {    //게임이 시작되면 버튼 활성 안되게
        return;
    }
    isPlaying = true;
    time = GAME_TIME;

    wordInput.focus();    //게임시작을 클릭하면 자동 커서 생성
    scoreDisplay.innerText = 0;

    timeInterval = setInterval(countDown, 1000);   //킬때
    checkInterval = setInterval(checkStatus, 50)
    buttonChange('게임 중')   //게임 실행 시 버튼모양 바뀌기
}



// 버튼 모양 설정, 종료시 버튼 재활성화 39:30
function checkStatus() {
    if (!isPlaying && time === 0){  //게임이 종료가 됐고 0초가 되면
        buttonChange('게임시작')  //36:13초에서 게임종료임, 39:40에 게임시작으로 벼녁ㅇ
        clearInterval(checkInterval)
    }
}





// 단어 불러오기
function getWords() {
    words = ['민영이 최고', '준현이가 좋아하는 국밥', '오늘도 행복해용', '라뷰라뷰', '조심히 올라오세요', '사랑해요 준현씨', '코딩천재 김민영', '서준빵은 내꼬', '준현씨 기다리느라 목빠진 민영'];
    buttonChange('게임시작');   //게임이 시작이 됐다!

}


// 단어 일치 체크
function checkMatch() {
    if ( wordInput.value.toLowerCase() === wordDisplay.innerText.toLowerCase() ) {
        wordInput.value = "";   //초기화 시키기
        if(!isPlaying) {
            return;
        }
        score++;
        scoreDisplay.innerText = score;
        time = GAME_TIME;
        const randomIndex = Math.floor(Math.random() * words.length); //ramdom?
        wordDisplay.innerText = words[randomIndex] 
    } 
}







function countDown () {
    // 삼항연산자 쓰기  (조건) ? 참일 경우 : 거짓일 경우;
    time > 0 ? time-- : isPlaying = false ; 
    if(!isPlaying) {
        clearInterval(timeInterval)
    }

    timeDisplay.innerText = time;
}


function buttonChange(text) {
    button.innerText = text ; 
    text === '게임시작' ? button.classList.remove('loading') : button.classList.add('loading');
}


