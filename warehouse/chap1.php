<?php
//include('warehouse.php');
chapter_opener("CHAPTER 1");
chapter_topics($chapter1Topics, "chapter1");
chapter_closer();

// topics

if(isset($_POST['chapter1T2']))
{
    include('chapter1/t2.html');
}
?>
<embed src="pdfs/chapter-1.pdf" width="100px" height="200px" />