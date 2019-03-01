<?php
function GuessCandidates($compareString)
{
global $vocabularyArray;
$letter=$compareString[0];
if(count($vocabularyArray[$letter])==0)
{
$parser = xml_parser_create();

xml_parser_set_option($parser,XML_OPTION_SKIP_WHITE,1); <o:p />

xml_parser_set_option($parser,XML_OPTION_CASE_FOLDING,0);
<o:p> </o:p>
$data = implode("",file('dictionary/'.$letter.'.xml'));
xml_parse_into_struct($parser,$data,&$d_ar,&$i_ar)
    or print_error();
$counter=0;
for($i=0; $i<count($i_ar['WordEntry']);
    $i++) {
     if($d_ar[$i_ar['WordEntry'][$i]]['type']=='open') {
         for($j=$i_ar['WordEntry'][$i]; $j<$i_ar['WordEntry'][$i+1];
    $j++) {
             if($d_ar[$j]['tag'] == 'word')
    {
                 $word = $d_ar[$j]['value'];
             }elseif($d_ar[$j]['tag'] == 'probability')
    {
                 $probability = $d_ar[$j]['value'];
             }
         }
         $editDistance=SpellDice::StringDistance($compareString,$word);
         if($compareString==$word)
         return $word;
         else
         if($editDistance<=20)
           $CandidateArray[$compareString][$word]=$probability*(20/$editDistance);
     }
}
xml_parser_free($parser);
}
arsort($CandidateArray[$compareString]);
if(count($CandidateArray[$compareString])>5)
$CandidateArray[$compareString]=array_slice($CandidateArray[$compareString],
    0, 5);
$result=array();
foreach ($CandidateArray[$compareString]
    as $key=> $value)
{
                 array_push($result,$key);
}
echo $result;
return $result;     <o:p />


}
echo GuessCandidates('Alfabet');
echo "I am here!";
?>