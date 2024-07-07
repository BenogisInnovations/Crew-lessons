<?php

// Function Scopes
# Is the publicity or availability of a function
# A function can either be public, private or protected
# To use function scopes, u need to wrap your functions in class

// A class is just like a wall wrapped around a land of building as illustrated below
#######################
// ..................#
// ..................#
// ..................#
// ..................#
// ..................#
// ..................#
// ..................#
########################

// Class
# Class name should begin with Capital Letter ALWAYS!!!!!!
class EduLinkSchoolCode {

    // This function returns the edulink school code for client schools
    public function getSchoolCode(){
        // STEP 1: Get the region the school is in
        // STEP 2: Get the school type | Private or Public
        // STEP 3: Get the school character prefix
        // STEP 4: check if school code exists and append the @edulink domain
    }
    
    // This function will return the two character region code. eg: Ashanti Region = AK
    // AK, GA, BA, WR, ER, UW, NR, AR, SR, OR, CR, WN, UE, NE, VR, BE
    private function getSchoolRegion(string $school_region){
        // we have passed the school region to get each word capitalized by first letter
        $school_region = ucwords($school_region); 
        
        switch ($school_region) {
            case 'Ashanti Region':
                return 'AK';
                break;
            // .......
            default:
                return 'invalid region name';
                break;
        }
    }
    
    // This function will return the school type being 1 for Private and 2 for Public
    private function getSchoolType(string $type){
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
    
    // This function will return the 3 to 5 character school prefix eg: TPMAJ
    private function getSchoolPrefix($schoolName){
        // Grace Action Faith Holy Molly Int. School
        // Adv.... Pre.... School
        // 
    }
    
    // This function will returnthe school code verified with the edulink domain
    private function verifySchoolCodeAndAppendDomain($schoolCode){
    
    }
}


