<?php

class BaseController extends Controller {

	/**
	 * Setup the layout used by the controller.
	 *
	 * @return void
	 */
	protected function setupLayout()
	{
		if ( ! is_null($this->layout))
		{
			$mapLocations = Array();
			
			$storyLocations = Storylocation::all();
			foreach($storyLocations as $storyLocation)
			{
				if ($storyLocation['location_type'] == "Organization") //Alleen organisaties staan op de kaart
				{
					$mapLocation = Array();
                    
                    //Locatie toevoegen
					$location = Location::where('id','=',$storyLocation['location_id'])->get();
                    if (count($location) > 0)
                    {
                        $location = $location[0];
                        $mapLocation['id']          = $location['id'];
                        $mapLocation['country']     = $location['country'];
                        $mapLocation['city']        = $location['city'];
                        $mapLocation['streetname']  = $location['streetname'];
                        $mapLocation['number']      = $location['number'];
                        $mapLocation['zipcode']     = $location['zipcode'];
                        $mapLocation['latitude']    = $location['latitude'];
                        $mapLocation['longitude']   = $location['longitude'];
                    }
                    
					$story = Story::where('id','=',$storyLocation['story_id'])->get();
					if (count($story) > 0)
                    {
                        //Type toevoegen
                        $mapLocation['storyType'] = $story[0]['type'];
                        
                        //Studentnaam toevoegen
                        $student = Student::where('id','=',$story[0]['student_id'])->get();
                        if (count($student) > 0)
                        {
                            $student = $student[0];
                            if ($student['insertion'] != null)
                            {
                                $mapLocation['person'] = $student['firstname'] . " " . $student['insertion'] . " " . $student['surname'];
                            }
                            else
                            {
                                $mapLocation['person'] = $student['firstname'] . " " . $student['surname'];
                            }
                        }
                        else
                        {
                            $mapLocation['person'] = "";
                        }
                        
                        //Opleiding toevoegen
                        $study = Study::where('id','=',$story[0]['study_id'])->get();
                        if (count($study) > 0)
                        {
                            $study = $study[0];
                            $mapLocation['study'] = $study['name'];
                        }
					}
                    
                    array_push($mapLocations,$mapLocation);
				}
			}
			
			
			$this->layout = View::make($this->layout);
			View::share('mapLocations', $mapLocations);
		}
		
	}

}