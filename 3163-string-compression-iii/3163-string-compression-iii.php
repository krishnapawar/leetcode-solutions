class Solution {

    /**
     * @param String $word
     * @return String
     */
    function compressedString($word) {
        $newstr="";
        $count=1;
        $n =strlen($word);
        for($i=1;$i<=$n;$i++){
            if($i<$n && $word[$i] == $word[$i -1] && $count < 9){
                $count +=1;
            }else{
                $newstr.=$count;
                $newstr.=$word[$i -1];
                $count=1;
            }
        }

        return $newstr;
    }
}