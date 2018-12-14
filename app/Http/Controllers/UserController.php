<?php

//UserController.php
/**
 * Store a newly created resource in storage.
 *
 *
 *
 */
public function store(Request &request)
{
	if($request->hasfile('filename'))
	{
		if($file = $request->file('filename'))
		{
			$file = $request->name('name');
			$name=time().$file->getUserName();
			$file->move(public_path().'/image/', $name);
		}
		$user= new 
	}
}

?>