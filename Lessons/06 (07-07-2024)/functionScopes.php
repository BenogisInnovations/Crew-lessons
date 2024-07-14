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
class EduLinkSchoolCodeGenerator {

    #NB: A function inside a class is called a METHOD
    #---------------------------------------------------

    // This function returns the edulink school code for client schools
    public function main($region, $SchoolType, $schoolName){
        // STEP 1: Get the region the school is in
        $schoolRegion = $this->getSchoolRegion('Ashanti Region');
        // STEP 2: Get the school type | Private or Public
        $schoolType = $this->getSchoolType('Private');
        // STEP 3: Get the school character prefix
        $schoolPrefix = $this->getSchoolPrefix('Grace Action Faith International School');
        // AK1-EDGHN
        $schoolCode = $schoolRegion.$schoolType.'-'.$schoolPrefix;
        // STEP 4: check if school code exists and append the @edulink domain
        $fullEduLinkSchoolCode = $this->verifySchoolCodeAndAppendDomain($schoolCode);
        return $fullEduLinkSchoolCode;
        // eg: AK1-EDGHN@EDULINKGHANA.NET
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

// Instantiate the class and assign to a variable
$generator1 = new EduLinkSchoolCodeGenerator();
$generator2 = new EduLinkSchoolCodeGenerator();
$generator3 = new EduLinkSchoolCodeGenerator();
$generator4 = new EduLinkSchoolCodeGenerator();

// You can then call the class functions
echo $generator1->main('Greater Accra','Private','NABY Educational Institute');
echo $generator2->main('Ashanti Region','Public','Tafo M/A JHS');
// echo $generator3->main();
// echo $generator4->main();
// echo $generator1->getSchoolRegion('Ashanti Region');
