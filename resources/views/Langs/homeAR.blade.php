@php
    if (session()->get('locale') == 'ar') {
        $txtpagename = $translator->translate($pagename, 'ar');
        $txtHerosliderheading1 = $translator->translate('The #1 place for commercial property', 'ar');
        $txtHerosliderptag1 = $translator->translate('Where Dreams Find Their Reality', 'ar');
        $txtHerosliderheading2 = $translator->translate('Where Dreams Find Their Reality', 'ar');
        $txtHerosliderptag2 = $translator->translate('The #1 place for commercial property', 'ar');
        $txtHerosliderheading3 = $translator->translate('The #1 place for commercial property', 'ar');
        $txtHerosliderptag3 = $translator->translate('Where Dreams Find Their Reality', 'ar');
        $txtcontactusbtn = $translator->translate('Contact Us', 'ar');
        $txtScetion1heading = $translator->translate('Most Popular Places', 'ar');
        $txtScetion1tagline = $translator->translate('find properties in these cities.', 'ar');
        $txtScetion2heading = $translator->translate('Featured Properties', 'ar');
        $txtScetion2tagline = $translator->translate('handpicked exclusive properties by our team.', 'ar');
        $txtScetion3heading = $translator->translate('our partners', 'ar');
        $txtScetion3tagline = $translator->translate('Brand Partners Successful Projects Trusted Many Clients Real Estate', 'ar');
        $txtScetion5heading = $translator->translate('what people says', 'ar');
        $txtScetion5tagline = $translator->translate('people says about Zahrat Al Shamal.', 'ar');
    }


    //layout

    $translator = new \App\Services\TranslationService();
    if (session()->get('locale') == 'ar') {
        $txtTitle = $translator->translate('Zahrat Alshamal Real Estate', 'ar');
        $txtHome = $translator->translate('Home', 'ar');
        $txtPrRent = $translator->translate('Rent', 'ar');
        $txtPrBuy = $translator->translate('Buy', 'ar');
        $txtPropertylistings = $translator->translate('Property Listing', 'ar');
        $txtAgenst = $translator->translate('Agents', 'ar');
        $txtBlogs = $translator->translate('Blogs', 'ar');
        $txtAbout = $translator->translate('About', 'ar');
        $txtContact = $translator->translate('Contact', 'ar');
        $txtAddproperty = $translator->translate('Add Property', 'ar');
        $txtSignin = $translator->translate('Sign In', 'ar');
        $txtPrExclusive = $translator->translate('Exclusive Properties', 'ar');
        $txtAddress = $translator->translate(
            'Address: Office 01, 4th Floor, Al Qamra Holding Group Building(53), Al Difaaf Street (893), Alsaad P.O. Box 31551',
            'ar',
        );
        $txtPhone = $translator->translate('+97470816051', 'ar');
        $txtTimings = $translator->translate('Monday - Sunday / 9:00AM - 6:00PM', 'ar');
        $txtTimings2 = $translator->translate('Friday / CLOSED', 'ar');

        $dir="rtl";
    } else
@endphp
