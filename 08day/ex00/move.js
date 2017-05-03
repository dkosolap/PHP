function moveRight(ply) {
	ply.direction = 'r'
	if (ply.x + 1 < maxX && ply.step)
	{
		tr[ply.y][ply.x].innerHTML = "<b></b>";
		ply.x++;
		tr[ply.y][ply.x].innerHTML = "<b class='" + ply.color + "'></b>";
		ply.step--;
	}
}

function moveLeft(ply) {
	ply.direction = 'l'
	if (ply.x - 1 > -1 && ply.step)
	{
		tr[ply.y][ply.x].innerHTML = "<b></b>";
		ply.x--;
		tr[ply.y][ply.x].innerHTML = "<b class='" + ply.color + "'></b>";
		ply.step--;
	}
}

function moveDown(ply) {
	ply.direction = 'd'
	if (ply.y + 1 < maxY && ply.step)
	{
		tr[ply.y][ply.x].innerHTML = "<b></b>";
		ply.y++;
		tr[ply.y][ply.x].innerHTML = "<b class='" + ply.color + "'></b>";
		ply.step--;
	}
}

function moveUp(ply) {
	ply.direction = 'u'
	if (ply.y - 1 > -1 && ply.step)
	{
		tr[ply.y][ply.x].innerHTML = "<b></b>";
		ply.y--;
		tr[ply.y][ply.x].innerHTML = "<b class='" + ply.color + "'></b>";
		ply.step--;
	}
}

function shot(ply) {
	if (ply.shot)
	{
		if (ply.direction == 'r')
		{
			for (var i = ply.x + 1; i < maxX; i++) {
				tr[ply.y][i].innerHTML = '<div class="shot"></div>';
			}
		}
		else if (ply.direction == 'l')
		{
			for (var i = ply.x - 1; i > -1; i--) {
				tr[ply.y][i].innerHTML = '<div class="shot"></div>';
			}
		}
		else if (ply.direction == 'd')
		{
			for (var i = ply.y + 1; i < maxY; i++) {
				tr[i][ply.x].innerHTML = '<div class="shot"></div>';
			}
		}
		else if (ply.direction == 'u')
		{
			for (var i = ply.y - 1; i > -1; i--) {
				tr[i][ply.x].innerHTML = '<div class="shot"></div>';
			}
		}
		ply.shot--;
	}
}