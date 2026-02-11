<?php if (! defined('BASEPATH')) exit('No direct script access allowed');
class Services extends MX_Controller
{

    public function index()
    {
        $data['title'] = "Our Services";
        $data['description'] = "";
        $data['module'] = "services";
        $data['view_file'] = "service";
        echo Modules::run('template/layout2', $data);
    }

    function homeRelocation()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "home_relocation";
    echo Modules::run('template/layout2', $data);
}

function office()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "office";
    echo Modules::run('template/layout2', $data);
}

function car()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "car";
    echo Modules::run('template/layout2', $data);
}

function courier()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "courier";
    echo Modules::run('template/layout2', $data);
}

function luggage()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "luggage";
    echo Modules::run('template/layout2', $data);
}

function insurance()
{
    $data['title'] = "";
    $data['description'] = "";
    $data['module'] = "services";
    $data['view_file'] = "insurance";
    echo Modules::run('template/layout2', $data);
}

    /**
     * Generic detail page loader for services.
     * Maps friendly slug to a view file and title.
     */
    public function detail($slug = '')
    {
        // normalize slug (handle underscores, url-encoding) to be robust
        $slug = urldecode(trim($slug));
        $map = array(
            'packing-and-moving' => array('view' => 'packing_and_moving', 'title' => 'Packing and Moving'),
            'transportation' => array('view' => 'transportation', 'title' => 'Transportation'),
            'local-shifting' => array('view' => 'local_shifting', 'title' => 'Local Shifting'),
            'home-relocation' => array('view' => 'home_relocation', 'title' => 'Home Relocation'),
            'commercial-shifting' => array('view' => 'commercial_shifting', 'title' => 'Commercial Shifting'),
            'car-carrier' => array('view' => 'car_carrier', 'title' => 'Car Carrier'),
            'loading-and-unloading' => array('view' => 'loading_unloading', 'title' => 'Loading and Unloading'),
            'warehouse-services' => array('view' => 'warehouses', 'title' => 'Warehouse Services'),
            'insurance-services' => array('view' => 'insurance', 'title' => 'Insurance Services')
        );
        // try direct match
        if (!isset($map[$slug])) {
            // try replacing underscores/hyphens both ways
            $alt1 = str_replace('-', '_', $slug);
            $alt2 = str_replace('_', '-', $slug);
            if (isset($map[$alt1])) {
                $slug = $alt1;
            } elseif (isset($map[$alt2])) {
                $slug = $alt2;
            } else {
                // try lowercase
                $low = strtolower($slug);
                if (isset($map[$low])) {
                    $slug = $low;
                } else {
                    show_404();
                    return;
                }
            }
        }

        $data['title'] = $map[$slug]['title'];
        $data['description'] = "";
        $data['module'] = 'services';
        $data['view_file'] = $map[$slug]['view'];
        echo Modules::run('template/layout2', $data);
    }

}