<?php
$chapters = array(
    "HOME",
    "CHAPTER 1",
    "CHAPTER 2",
    "CHAPTER 3",
    "CHAPTER 4",
    "CHAPTER 5",
);

$chapter1Topics = array(
    "Understand the concept of data structure",
    "Distinguish between data structures and data types",
    "Learn how data structures are organized in the computer",
    "Describe the characteristics of common types of data structures",
    "Understand the concept of Abstract Data types",
    "Describe the advantages of Abstract Data Types",
    "Understand the concept of algorithm",
    "Describe the properties of algorithm",
    "Discuss the implementation of Algorithms"
);
$chapter2Topcis = array(
    "Performance Analysis",
    "Asymptotic Notations"
);
?>



<?php
/* FUNCTIONS  */
 /*  CHAPTER OPENER FUNCTION  */
 
 function chapter_opener($title)
 {
    $opener = '<section id="resume" class="about"><div class="container"><div class="section-title"><h2>'
                . $title
                . '</h2>';
    echo $opener;
 }
 /*  CHAPTER CLOSER FUNCTION  */
 function chapter_closer()
 {
    $closer = '</div>
    </div>
    </section>';
    echo $closer;
 }
  /*  CHAPTER MIDDLE FUNCTION  */
function chapter_topics($arr, $chapterNo)
{ 
    $start = '<form action="index.php" method="POST">
        <ul>';
    echo $start;
    for($i = 0; $i < count($arr); $i++)
    {
        $temp = $i + 1;
        $t = '<li><button name="'
            . $chapterNo . "T". $temp
            . '" class="btn btn-light">' 
            . $arr[$i]
            . '</button></li>';
              echo $t;
    }
    echo '</ul></form>';
    /*foreach ($arr as $topic)
            {
              $t = '<p>'
                    . $topic
                    . '</p>';
              echo $t;
            } */
}
?>