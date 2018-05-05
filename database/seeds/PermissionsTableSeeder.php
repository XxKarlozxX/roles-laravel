<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permissions Users
	Permission::create([
		'name'		=> 'Navegar Usuarios',
		'slug'		=> 'users.index',
		'description'	=> 'Lista y navega todos los usuarios  del sistema',  
	]);
	Permission::create([
		'name'		=> 'Ver detalle de usuario',
		'slug'		=> 'users.show',
		'description'	=> 'Ver en detalle cada usuario del sistema',  
	]);
	Permission::create([
		'name'		=> 'Editar usuario',
		'slug'		=> 'users.edit',
		'description'	=> 'Editar cualquier dato de un usuario del sistema',  
	]);
	Permission::create([
		'name'		=> 'Eliminar usuario',
		'slug'		=> 'users.destroy',
		'description'	=> 'Elimina cualquier usuario del sistema',  
	]);

	//Roles
	Permission::create([
		'name'		=> 'Navegar Roles',
		'slug'		=> 'roles.index',
		'description'	=> 'Lista y navega todos los roles  del sistema',  
	]);
	Permission::create([
		'name'		=> 'Ver detalle de rol',
		'slug'		=> 'roles.show',
		'description'	=> 'Ver en detalle cada rol del sistema',  
	]);
	Permission::create([
		'name' 		=> 'Creacion de roles',
		'slug'		=> 'roles.create',
		'description'	=> 'Crea un rol para el sistema',
	]);
	Permission::create([
		'name'		=> 'Editar rol',
		'slug'		=> 'roles.edit',
		'description'	=> 'Editar cualquier dato de un rol del sistema',  
	]);
	Permission::create([
		'name'		=> 'Eliminar rol',
		'slug'		=> 'roles.destroy',
		'description'	=> 'Elimina cualquier rol del sistema',  
	]);

	//Productos
	Permission::create([
		'name'		=> 'Navegar Productos',
		'slug'		=> 'products.index',
		'description'	=> 'Lista y navega todos los productos del sistema',  
	]);
	Permission::create([
		'name'		=> 'Ver detalle de productos',
		'slug'		=> 'products.show',
		'description'	=> 'Ver en detalle cada producto del sistema',  
	]);
	Permission::create([
		'name' 		=> 'Creacion de productos',
		'slug'		=> 'products.create',
		'description'	=> 'Crea un rol para el sistema',
	]);
	Permission::create([
		'name'		=> 'Editar product',
		'slug'		=> 'products.edit',
		'description'	=> 'Editar cualquier dato de un producto del sistema',  
	]);
	Permission::create([
		'name'		=> 'Eliminar producto',
		'slug'		=> 'products.destroy',
		'description'	=> 'Elimina cualquier producto del sistema',  
	]);
    }
}
