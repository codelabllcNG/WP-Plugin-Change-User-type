<?php

/**
* Plugin Name: Niishcloud Merchant User Roles
* Description: Add all user role 
* Plugin URI: http://niishcloud.com
* Author: Niishcloud Dev team
* version: 1.0 
*/

//No user can access this file
defined('ABSPATH') or die();

//activate plugin function
register_activation_hook(__FILE__, 'merchant_roles_activation');

//activate plugin function
register_deactivation_hook(__FILE__, 'merchant_roles_deactivation');


//:::function to add roles::://
function merchant_roles_activation(){
    
    //Merchant role
        $capabilities_merchant = [
            'read'          => true,
            'edit_post'     => true,
            'upload_file'   => true,
            'create_users'  => true,
            'delete_users'  => true,
            'edit_users'    => true
        ];

    //HR role
        $capabilities_hr = [
           
            'read'          => true,
            'upload_file'   => true,
            'create_users'  => true,
            'delete_users'  => true,
            'edit_users'    => true
        
        ];

    //Accountant role
        $capabilities_accountant = [
            'read'          => true,
            'edit_post'     => true,
            'upload_file'   => true
        
        ];

    //Employee role
        $capabilities_employee = [
            'read'          => true,
            'edit_post'     => true
        ];

        
        //add roles
        add_role('merchant_role', 'Merchant', $capabilities_merchant);
        add_role('hr_role', 'HR', $capabilities_hr);
        add_role('accountant_role', 'Accountant', $capabilities_accountant );
        add_role('employee_role', 'Employee', $capabilities_employee);
}

//:: fucntion to remove roles when function is deactivated::/
function merchant_roles_deactivation(){
    remove_role('merchant_role');
    remove_role('accountant_role');
    remove_role('hr_role');
    remove_role('employee_role');
}