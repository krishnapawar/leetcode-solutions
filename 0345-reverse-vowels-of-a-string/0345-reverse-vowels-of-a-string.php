class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowels = 'aeiouAEIOU';
        $left = 0;
        $right = strlen($s) - 1;

        while($left<$right){

            while($left<$right && strpos($vowels,$s[$left])===false){
                $left ++;
            }

            while($left<$right && strpos($vowels,$s[$right])===false){
                $right --;
            }

            $temp = $s[$left];
            $s[$left] = $s[$right];
            $s[$right] = $temp;

            $left ++;
            $right --;
        }
        return $s;
    }
}