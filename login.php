<style>
form{
	width:300px;
	margin:auto;
}
form label {
	width:110px;
	display:inline-table;
	margin-bottom:10px;
}
form input:not(.submit) {
	height:25px;
	width:180px;
	display:inline-table;
	padding:0 5px;
	box-sizing:border-box;
	background-color:#FFF;
}
.submit{
	float:right;
	padding:5px 10px;
	margin-right:5px;
}


</style>
<article>
	<form method="post" action="includes/tjeklogin.php">
    	<label for="brugernavn">Brugernavn:</label>
        <input type="text" name="brugernavn" id="brugernavn" value="admin">
        <label for="kodeord">Kodeord:</label>    
        <input type="password" name="kodeord" id="kodeord" value="12345">
        <input type="submit" name="submit" value="Log ind" class="submit">
    </form>
</article>