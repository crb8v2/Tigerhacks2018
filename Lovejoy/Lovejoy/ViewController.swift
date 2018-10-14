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
    @IBOutlet weak var last_date: UITextField!
    let checkInModel = CheckInModel()
    override func viewDidAppear(_ animated: Bool) {
        checkInModel.getDateFromServer()
        last_date.text = checkInModel.last_updated

    }
    override func viewDidLoad() {
        super.viewDidLoad()
        // Do any additional setup after loading the view, typically from a nib.
        
        checkInModel.getDateFromServer()
        last_date.text = checkInModel.last_updated
        
    }

    override func didReceiveMemoryWarning() {
        super.didReceiveMemoryWarning()
        // Dispose of any resources that can be recreated.
    }
    

    @IBAction func onCheckInButtonPress(){
    print(#function)
        checkInModel.checkIn()
        checkInModel.getDateFromServer()
        last_date.text = checkInModel.last_updated
    }
}

