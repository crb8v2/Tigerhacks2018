//
//  ViewController.swift
//  Lovejoy
//
//  Created by Ben Cradick on 10/13/18.
//  Copyright © 2018 Ben Cradick. All rights reserved.
//

import UIKit

class ViewController: UIViewController {

    @IBOutlet weak var checkInButton: UIButton!
    
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }

    @IBAction func onCheckInButtonPress(){
    print(#function)

    }
}

