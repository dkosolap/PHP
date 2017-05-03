var elem = document.getElementById('content');
var tr = [];
var x = 0;
var y = 0;

var maxX = 50;
var maxY = 50;
var y = 0;
var table = document.createElement('table');

var playerA;
var playerB;
var player;

var shipA = document.querySelector('.shipA');
var stepA = document.querySelector('.stepA');
var shotA = document.querySelector('.shotA');
var shipB = document.querySelector('.shipB');
var stepB = document.querySelector('.stepB');
var shotB = document.querySelector('.shotB');
var log = document.querySelector('.log');

/**
* Функция создания таблицы
**/
function create_table() {
	table.innerHTML = '';
	for (var i = 0 ; i < maxY; i++) {
		table.appendChild((tr[i] = document.createElement('tr')));
		for (var j =0; j < maxX; j++) {
			tr[i].appendChild((tr[i][j] = document.createElement('td')));
			tr[i][j].appendChild( document.createElement('b'));
			tr[i][j].className = 'white';
		}
	}
	elem.appendChild(table);
}

/**
* Функция ставит игра на карту
**/
function placePlayer(ply) {
	player = ply;
	tr[ply.y][ply.x].innerHTML = "<b class='" + ply.color + "'></b>";
}

/**
* Функция меняет игрока
* • если один из игроков мертв, то функция ничего не делает
* • так же в функции рандомно даются шаги и всего один выстрел
**/
function changePlayer() {
	if (!playerA.live || !playerB.live)
		return ;
	if (playerA.focus)
	{
		playerA.focus = false;
		playerB.focus = true;
		player = playerB;
		var a = document.querySelectorAll('.white');
		for (var i = 0; i < (maxX * maxY); i++) {
			a[i].className = "black";
		}
	}
	else
	{
		playerB.focus = false;
		playerA.focus = true;
		player = playerA;
		var a = document.querySelectorAll('.black');
		for (var i = 0; i < (maxX * maxY); i++) {
			a[i].className = "white";
		}
	}
	player.step = Math.floor(Math.random() * (15 - 1 + 1)) + 1;
	player.shot = 1;

}

/**
* Функция выводит статистику для игроков
**/
function writeInfo() {
	if (!tr[playerB.y][playerB.x].querySelector('.red'))
		playerB.live = false;
	if (!tr[playerA.y][playerA.x].querySelector('.blue'))
		playerA.live = false;
	shipA.innerHTML = (playerA.live ? 'Live' : 'Die');
	stepA.innerHTML = 'Step = ' + playerA.step;
	shotA.innerHTML = 'Shot = ' + playerA.shot;
	shipB.innerHTML = (playerB.live ? 'Live' : 'Die');
	stepB.innerHTML = 'Step = ' + playerB.step;
	shotB.innerHTML = 'Shot = ' + playerB.shot;
}

/**
* Функция создаёт новую игру
**/
function restart() {
	create_table();
	log.innerHTML = "Game start!"
	playerA = {
		x: 0,
		y: 0,
		step: 10,
		shot: 1,
		live: true,
		direction: 'r',
		name: 'Player 1',
		focus: true,
		color: 'blue'};
	playerB = {
		x: maxX - 1,
		y: maxY - 1,
		step: 0,
		shot: 0,
		live: true,
		direction: 'l',
		name: 'Player 2',
		focus: false,
		color: 'red'
	};
	placePlayer(playerB);
	placePlayer(playerA);
	player.step = Math.floor(Math.random() * (12 - 1 + 1)) + 1;
	writeInfo();
}

/**
* Функция оброботки событий на клавиатуру
**/
function getChar(event) {
	if (event == 39)
		moveRight(player);
	else if (event == 37)
		moveLeft(player);
	else if (event == 40)
		moveDown(player);
	else if (event == 38)
		moveUp(player);
	else if (event == 32)
		shot(player);
	else if (event == 13)
		changePlayer();
	else if (event == 27)
		restart();
	writeInfo();
	if (!playerA.live || !playerB.live)
		log.innerHTML = player.name + " Win!!!";
}

restart();
