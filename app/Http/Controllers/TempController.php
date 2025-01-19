<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TempController extends Controller
{
    /**
 * Display the 'About' page.
 * 
 * This method handles the request to view the 'About' page. It returns the 'about' view 
 * to the user, which typically contains information about the website, company, or application.
 * 
 * @return \Illuminate\Contracts\View\View The 'about' view containing information about the site or organization.
 */
    public function about(){
        return view('about'); // Return the 'about' view to be displayed to the user
    }

    /**
 * Display the 'Contact' page.
 * 
 * This method handles the request to view the 'Contact' page. It returns the 'contact' view 
 * which typically contains a contact form or details on how to get in touch with the organization.
 * 
 * @return \Illuminate\Contracts\View\View The 'contact' view containing the contact form or contact information.
 */
    public function contact(){
        return view('contact');  // Return the 'contact' view to be displayed to the user
    }
   
    /**
 * Display the 'Admin Profile' page.
 * 
 * This method handles the request to view the 'Admin Profile' page. It returns the 'adminprofile' view,
 * which typically contains the administrator's personal information, profile details, and management options.
 * 
 * @return \Illuminate\Contracts\View\View The 'adminprofile' view containing the administrator's profile details.
 */
    public function adminProfile(){
        return view('adminprofile');  // Return the 'adminprofile' view to display the admin's profile page
    }

    /**
 * Display the 'Normal User' page.
 * 
 * This method handles the request to view the 'Normal User' page. It returns the 'normal' view,
 * which typically contains the normal user's dashboard or profile details, offering access to general features and settings.
 * 
 * @return \Illuminate\Contracts\View\View The 'normal' view displaying the user's dashboard or profile.
 */
    public function normal(){
        return view('normal'); // Return the 'normal' view to display the normal user's dashboard or profile page
    }
    
}
