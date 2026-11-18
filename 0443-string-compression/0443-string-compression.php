class Solution {

    /**
     * @param String[] $chars
     * @return Integer
     */
    function compress(&$chars) {
        $result = [];
        $count = 1;
        $n = count($chars);

        for ($i = 1; $i <= $n; $i++) {

            if ($i < $n && $chars[$i] == $chars[$i - 1]) {
                $count++;
            } else {
                $result[] = $chars[$i - 1];
                if($count>1){
                    foreach(str_split((string)$count) as $digit){
                        $result[] = $digit;
                    }
                }
                
                $count =1;
            }
        }
        $chars = $result;
        return count($result);
    }
}