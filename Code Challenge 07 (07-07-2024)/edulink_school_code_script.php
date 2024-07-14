<?php

// The Edulink School Code Class
class EduLinkSchoolCode {


    // This function returns the edulink school code for client schools
    function getSchoolCode($schoolName, $schoolRegion, $schoolType){
        // STEP 1: Get the region the school is in
        $regionCode = $this->getSchoolRegion($schoolRegion);
        
        // STEP 2: Get the school type | Private or Public
        $typeCode = $this->getSchoolType($schoolType);
        
        // STEP 3: Get the school character prefix
        $prefix = $this->getSchoolPrefix($schoolName);
        
        // STEP 4: Combine the codes with a hyphen
        $schoolCode = $regionCode . $typeCode . '-' . $prefix;

        // STEP 5: Verify the school code and append the @edulink domain
        return $this->verifySchoolCodeAndAppendDomain($schoolCode);
    }
    
    // This function will return the two character region code. eg: Ashanti Region = AK
    // AK, GA, BA, WR, ER, UW, NR, AR, SR, OR, CR, WN, UE, NE, VR, BE
    function getSchoolRegion(string $school_region){
        // we have passed the school region to get each word capitalized by first letter
        $school_region = ucwords($school_region); 
        
        switch ($school_region) {
            case 'Ashanti Region':
                return 'AK';
                break;
            case 'Greater Accra':
                return 'GA';
                break;
            case 'Bron Ahafo':
                return 'BA';
                break;
            case 'Western Region':
                return 'WR';
                break;
            case 'Eastern Region':
                return 'ER';
                break;
            case 'Upper West':
                return 'UW';
                break;
            case 'Northern Region':
                return 'NR';
                break;
            case 'Ahafo Region':
                return 'AR';
                break;
            case 'Savana Region':
                return 'SR';
                break;
            case 'Oti Region':
                return 'OR';
                break;
            case 'Central Region':
                return 'ER';
                break;
            case 'Western North':
                return 'WN';
                break;
            case 'Upper East':
                return 'UE';
                break;
            case 'Northern East':
                return 'NE';
                break;
            case 'Volta Region':
                return 'VR';
                break;
            case 'Bono East':
                return 'BE';
                break;        
            default:
                return 'invalid region name';
            
        }
    }
    
    // This function will return the school type being 1 for Private and 2 for Public
    function getSchoolType(string $type){
        // we have passed the school region to get each word capitalized by first letter
        $type = strtolower($type);

        if ($type == 'private') {
            return 1;
        } elseif( $type == 'public') {
            return 2;
        } else {
            return 'invalid school type';
        }
    }
    
    function getSchoolPrefix($schoolName) {
        // Split the school name into words
        $words = explode(' ', $schoolName);
    
        // Initialize an empty string for the prefix
        $prefix = '';
    
        // Loop through the words and concatenate the first letter of each word
        foreach ($words as $word) {
            $prefix .= $word[0];
        }
    
        // Return the first 3 to 5 characters of the prefix
        return substr($prefix, 0, 5);
    }
    
    
    
    // This function will return the school code verified with the edulink domain
    function verifySchoolCodeAndAppendDomain($schoolCode){
        // Assume that any non-empty school code is valid
        if (!empty($schoolCode)) {
            return $schoolCode . '@edulink';
        } else {
            return 'invalid school code';
        }
    }
}

// Example usage
$edulink = new EduLinkSchoolCode();
$schoolCode = $edulink->getSchoolCode("New World Living School", "Greater Accra", "private");
echo $schoolCode; // Outputs: GA1NWL-@edulink

?>
