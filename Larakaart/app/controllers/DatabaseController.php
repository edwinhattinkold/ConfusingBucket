<?php

class DatabaseController extends BaseController {

	public function vullen()
	{
		# Het toevoegen van scholen
		$avans = new School();
		$avans->name = "Avans Hogeschool";
		$avans->website = "www.avans.nl";
		$avans->save();
		
		# Het toevoegen van opleidingen
		$ie = new Study();
		$ie->name = "industrial engineering";
		$ie->school_id = $avans->id;
		$ie->save();
		
		$me = new Study();
		$me->name = "mechanical engineering";
		$me->school_id = $avans->id;
		$me->save();

		$ce = new Study();
		$ce->name = "computer engineering";
		$ce->school_id = $avans->id;
		$ce->save();
		
		$cs = new Study();
		$cs->name = "computer science";
		$cs->school_id = $avans->id;
		$cs->save();
		
		$ee = new Study();
		$ee->name = "electrical engineering";
		$ee->school_id = $avans->id;
		$ee->save();
		
		$cmd = new Study();
		$cmd->name = "communication and multimedia design";
		$cmd->school_id = $avans->id;
		$cmd->save();
		
		# Het toevoegen van studenten: Afstuderen
		$student1 = new Student();
		$student1->firstname = "Donald";
		$student1->surname = "Rutgers";
		$student1->study_id = $ie->id; 
		$student1->save();
		
		$student2 = new Student();	
		$student2->firstname = "Jorick";
		$student2->surname = "Dam";
		$student2->study_id = $ie->id; 
		$student2->save();
		
		$student3 = new Student();
		$student3->firstname = "Arthur";
		$student3->surname = "Kampsch÷er";
		$student3->study_id = $me->id;
		$student3->save();
	
		# Het toevoegen van studenten: EPS
		$student4 = new Student();
		$student4->firstname = "Bram";
		$student4->surname = "Bosch";
		$student4->study_id = $ce->id;
		$student4->save();
		
		$student5 = new Student();
		$student5->firstname = "Paul";
		$student5->surname = "Claessens";
		$student5->study_id = $ce->id;
		$student5->save();
		
		$student6 = new Student();
		$student6->firstname = "Rudy";
		$student6->surname = "Chambon";
		$student6->study_id = $cs->id;
		$student6->save();
		
		$student7 = new Student();
		$student7->firstname = "Rick";
		$student7->insertion = "van";
		$student7->surname = "Uden";
		$student7->study_id = $ee->id;
		$student7->save();
		
		# Het toevoegen van studenten: Minor
		$student8 = new Student();
		$student8->firstname = "Joey";
		$student8->insertion = "van der";
		$student8->surname = "Veeken";
		$student8->study_id = $cmd->id;
		$student8->save();
		
		$student9 = new Student();
		$student9->firstname = "Dominique";
		$student9->surname = "Lankheet";
		$student9->study_id = $cmd->id;
		$student9->save();
		
		$student10 = new Student();
		$student10->firstname = "Paul";
		$student10->surname = "Plantaz";
		$student10->study_id = $cmd->id;
		$student10->save();
		
		$student11 = new Student();
		$student11->firstname = "Linda";
		$student11->surname = "Janssen";
		$student11->study_id = $cmd->id;
		$student11->save();
		
		# Het toevoegen van studenten: Stage
		$student12 = new Student();
		$student12->firstname = "Luc";
		$student12->insertion = "de";
		$student12->surname = "Wolf";
		$student12->study_id = $me->id;
		$student12->save();
		
		$student13 = new Student();
		$student13->firstname = "Lukas";
		$student13->insertion = "van der";
		$student13->surname = "Linden";
		$student13->study_id = $me->id;
		$student13->save();
		
		$student14 = new Student();		
		$student14->firstname = "Pepijn";
		$student14->surname = "Veldhuizen";
		$student14->study_id = $ie->id;
		$student14->save();
		
		$student15 = new Student();
		$student15->firstname = "Kevin";
		$student15->surname = "Tai-Tin-Woei";
		$student15->study_id = $ie->id;
		$student15->save();
			
		# Het toevoegen van organization types
		$school = new Organization_type();
		$school->name = "school";
		$school->save();
		
		$company = new Organization_type();
		$company->name = "company";
		$company->save();
		
		# Het toevoegen van locaties: Afstuderen
		$herentals = new Location();
		$herentals->country = "Belgium";
		$herentals->city = "Herentals";
		$herentals->latitude = ;
		$herentals->longitude = ;
		$herentals->save();
		
		$wellington = new Location();
		$wellington->country = "New Zealand";
		$wellington->city = "Wellington";
		$wellington->latitude = ;
		$wellington->longitude = ;
		$wellington->save();

		# Het toevoegen van locaties: EPS
		$copenhagen = new Location();
		$copenhagen->country = "Denmark";
		$copenhagen->city = "Copenhagen";
		$copenhagen->latitude = ;
		$copenhagen->longitude = ;
		$copenhagen->save();
		
		$vaasa = new Location();
		$vaasa->country = "Finland";
		$vaasa->city = "Vaasa";
		$vaasa->latitude = ;
		$vaasa->longitude = ;
		$vaasa->save();
		
		# Het toevoegen van locaties: Minor
		$valencia = new Location();
		$valencia->country = "Spain";
		$valencia->city = "Valencia";
		$valencia->latitude = ;
		$valencia->longitude = ;
		$valencia->save();
		
		$kongsberg = new Location();
		$kongsberg->country = "Norway";
		$kongsberg->city = "Kongsberg";
		$kongsberg->latitude = 59.66888;
		$kongsberg->longitude =  	9.65019;
		$kongsberg->save();
		
		# Het toevoegen van locaties: Stage
		$sydney = new Location();
		$sydney->country = "Australia";
		$sydney->city = "Sydney";
		$sydney->latitude = -33.86749;
		$sydney->longitude =  	151.20699;
		$sydney->save();
		
		$paramaribo = new Location();
		$paramaribo->country = "Suriname";
		$paramaribo->city = "Paramaribo";
		$paramaribo->latitude = 5.85204;
		$paramaribo->longitude =  	-55.20383;
		$paramaribo->save();
		
		# Het toevoegen van de organisaties: Afstuderen
		$kraft = new Organization();
		$kraft->name = "Kraft Foods";
		$kraft->type = $company->name;
		$kraft->location_id = $herentals->id;
		$kraft->save();
		
		$weltec = new Organization();
		$weltec->name = "Weltec Centre for Smart Product";
		$weltec->type = $company->name;
		$weltec->location_id = $wellington->id;
		$weltec->save();
		
		# Het toevoegen van de organisaties: EPS
		$copenhagenUni = new Organization();
		$copenhagenUni->name = "Copenhagen University of Engineering";
		$copenhagenUni->type = $school->name;
		$copenhagenUni->location_id = $copenhagen->id;
		$copenhagenUni->save();
		
		$novia = new Organization();
		$novia->name = "Novia University of Applied Sciences";
		$novia->type = $school->name;
		$novia->location_id = $vaasa->id;
		$novia->save();
		
		# Het toevoegen van de organisaties: Minor
		$politÚcnica = new Organization();
		$politÚcnica->name = "Universidad PolitÚcnica de Valencia";
		$politÚcnica->type = $school->name;
		$politÚcnica->location_id = $valencia->id;
		$politÚcnica->save();
		
		$buskerud = new Organization();
		$buskerud->name = "Noorwegen, Buskerud University";
		$buskerud->type = $school->name;
		$buskerud->location_id = $kongsberg->id;
		$buskerud->save();
		
		# Het toevoegen van de organisaties: Stage
		$robotics = new Organization();
		$robotics->name = "Australian Centre for Field Robotics";
		$robotics->type = $company->name;
		$robotics->location_id = $sydney->id;
		$robotics->save();
		
		$suralco = new Organization();
		$suralco->name = "Suralco LLC";
		$suralco->type = $company->name;
		$suralco->location_id $paramaribo;
		$suralco->save();
	
		# Het toevoegen van de activity types
		$internship = new Activity_type();
		$internship->name = "internship";
		$internship->save();
		
		$eps = new Activity_type();
		$eps->name = "EPS";
		$eps->save();
		
		$finalThesis = new Activity_type();
		$finalThesis->name = "final thesis";
		$finalThesis->save();
		
		$minor = new Activity_type();
		$minor->name = "minor";
		$minor->save();
	
		# Het toevoegen van activity_status
		$open = new Activity_status();
		$open->name = "open";
		$open->save();
		
		$closed = new Activity_status();
		$closed->name = "closed";
		$closed->save();
		
		# Het toevoegen van activity: Afstuderen
		$activity1 = new Activity();
		$activity1->name = "Final thesis Kraft Foods";
		$activity1->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity1->type = $finalThesis->name;
		$activity1->status = $closed->name;
		$activity1->organization_id = $kraft->id;
		$activity1->save();
		
		$activity2 = new Activity();
		$activity2->name = "Final thesis Weltec Centre for Smart Product";
		$activity2->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity2->type = $finalThesis->name;
		$activity2->status = $closed->name;
		$activity2->organization_id = $weltec->id;
		$activity2->save();

		# Het toevoegen van activity: EPS
		$activity3 = new Activity();
		$activity3->name = "EPS Copenhagen University of Engineering";
		$activity3->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity3->type = $eps->name;
		$activity3->status = $closed->name;
		$activity3->organization_id = $copenhagenUni->id;
		$activity3->save();
		
		$activity4 = new Activity();
		$activity4->name = "EPS Novia University of Applied Sciences";
		$activity4->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity4->type = $eps->name;
		$activity4->status = $closed->name;
		$activity4->organization_id = $novia->id;
		$activity4->save();
		
		# Het toevoegen van activity: Minor
		$activity5 = new Activity();
		$activity5->name = "Minor Universidad PolitÚcnica de Valencia";
		$activity5->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity5->type = $minor->name;
		$activity5->status = $closed->name;
		$activity5->organization_id = $politÚcnica->id;
		$activity5->save();
		
		$activity6 = new Activity();
		$activity6->name = "Minor Noorwegen, Buskerud University";
		$activity6->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity6->type = $minor->name;
		$activity6->status = $closed->name;
		$activity6->organization_id = $buskerud->id;
		$activity6->save();
		
		$activity7 = new Activity();
		$activity7->name = "Minor Copenhagen University of Engineering";
		$activity7->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity7->type = $minor->name;
		$activity7->status = $closed->name;
		$activity7->organization_id = $copenhagenUni->id;
		$activity7->save();
		
		# Het toevoegen van activity: Stage
		$activity8 = new Activity();
		$activity8->name = "Internship Australian Centre for Field Robotics";
		$activity8->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity8->type = $internship->name;
		$activity8->status = $closed->name;
		$activity8->organization_id = $robotics->id;
		$activity8->save();
		
		$activity9 = new Activity();
		$activity9->name = "Internship Suralco LLC";
		$activity9->description = "Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet. Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui.";
		$activity9->type = $internship->name;
		$activity9->status = $closed->name;
		$activity9->organization_id = $suralco->id;
		$activity9->save();
		
		# Add experiences for final thesis'
		$experience1 = new Experience();
		$experience1->activity_id=$activity1->id;
		$experience1->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience1->accepted=True;
		$experience1->student_id=$student1->id;
		$experience1->save();
		
		$experience2 = new Experience();
		$experience2->activity_id=$activity1->id;
		$experience2->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience2->accepted=True;
		$experience2->student_id=$student2->id;
		$experience2->save();
		
		$experience3 = new Experience();
		$experience3->activity_id=$activity2->id;
		$experience3->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience3->accepted=True;
		$experience3->student_id=$student3->id;
		$experience3->save();
		
		# Add experiences for EPS
		$experience4 = new Experience();
		$experience4->activity_id=$activity3->id;
		$experience4->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience4->accepted=True;
		$experience4->student_id=$student4->id;
		$experience4->save();
		
		$experience5 = new Experience();
		$experience5->activity_id=$activity3->id;
		$experience5->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience5->accepted=True;
		$experience5->student_id=$student5->id;
		$experience5->save();
		
		$experience6 = new Experience();
		$experience6->activity_id=$activity4->id;
		$experience6->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience6->accepted=True;
		$experience6->student_id=$student6->id;
		$experience6->save();
		
		$experience7 = new Experience();
		$experience7->activity_id=$activity3->id;
		$experience7->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience7->accepted=True;
		$experience7->student_id=$student7->id;
		$experience7->save();
		
		# Add experiences for minors
		$experience8 = new Experience();
		$experience8->activity_id=$activity5->id;
		$experience8->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience8->accepted=True;
		$experience8->student_id=$student8->id;
		$experience8->save();
		
		$experience9 = new Experience();
		$experience9->activity_id=$activity5->id;
		$experience9->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience9->accepted=True;
		$experience9->student_id=$student9->id;
		$experience9->save();
		
		$experience10 = new Experience();
		$experience10->activity_id=$activity6->id;
		$experience10->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience10->accepted=True;
		$experience10->student_id=$student10->id;
		$experience10->save();
		
		$experience11 = new Experience();
		$experience11->activity_id=$activity7->id;
		$experience11->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience11->accepted=True;
		$experience11->student_id=$student11->id;
		$experience11->save();
		
		# Add experiences for internships
		$experience12 = new Experience();
		$experience12->activity_id=$activity8->id;
		$experience12->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience12->accepted=True;
		$experience12->student_id=$student12->id;
		$experience12->save();
		
		$experience13 = new Experience();
		$experience13->activity_id=$activity8->id;
		$experience13->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience13->accepted=True;
		$experience13->student_id=$student13->id;
		$experience13->save();
		
		$experience14 = new Experience();
		$experience14->activity_id=$activity9->id;
		$experience14->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience14->accepted=True;
		$experience14->student_id=$student14->id;
		$experience14->save();
		
		$experience15 = new Experience();
		$experience15->activity_id=$activity9->id;
		$experience15->description="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce hendrerit sed magna ac luctus. Aliquam nisi metus, vulputate ut ultricies quis, vestibulum interdum sem. Etiam dui ante, tempor quis justo in, pharetra adipiscing tellus. Proin ullamcorper cursus vestibulum. Duis porta ligula ac tempus scelerisque. Morbi interdum fringilla enim nec placerat. Cras quis elit fringilla, pulvinar libero eget, dapibus tortor. Aliquam vitae consequat massa. Quisque euismod id nibh tempor iaculis. Praesent tempus lacus lobortis, dignissim velit eget, dapibus mauris. In sit amet sapien ultrices, commodo dui viverra, adipiscing massa. Etiam eget lacinia ligula. Cras hendrerit rhoncus mauris a vehicula. Aenean tempus purus iaculis porta molestie. ";
		$experience15->accepted=True;
		$experience15->student_id= $student15->id;
		$experience15->save();
		
		
		
		# Het toevoegen van crud operaties
		$create = new Crud_operation();
		$create->type = "create";
		$create->save();
		
		$delete = new Crud_operation();
		$delete->type = "delete";
		$delete->save();
		
		$read = new Crud_operation();
		$read->type = "read";
		$read->save();
		
		$update = new Crud_operation();
		$update->type = "update";
		$update->save();
			
		return View::make('gevuld');	
	}

}
?>
