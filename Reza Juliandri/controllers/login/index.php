<?php
if(isset($_SESSION['login'])){
	redirect('?c=home');
}
template('login');