class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function firstUniqChar($str) {
        for($i=0;$i<strlen($str);$i++){
			if(strpos($str,$str[$i])===strrpos($str,$str[$i])){
				return strpos($str,$str[$i]);
			}
		}
        return -1;
    }
}