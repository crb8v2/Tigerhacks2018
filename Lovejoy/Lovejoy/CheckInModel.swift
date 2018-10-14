 //
//  CheckInModel.swift
//  Lovejoy
//
//  Created by Ben Cradick on 10/13/18.
//  Copyright © 2018 Ben Cradick. All rights reserved.
//

import Foundation
import SwiftyJSON
import Alamofire

 class CheckInModel{
    let check_in_endpoint: String = "http://67.205.133.104/api/time"
    let last_updated_endpoint: String = "http://67.205.133.104/api/LastUpdated"
    var last_updated: String = ""
    init() {
       getDateFromServer()
    }
    func checkIn(){
        Alamofire.request(check_in_endpoint).responseJSON { response in
            print("Request: \(String(describing: response.request))")   // original url request
            print("Response: \(String(describing: response.response))") // http url response
            print("Result: \(response.result)")                         // response serialization result
            
            if let json = response.result.value {
                print("JSON: \(json)") // serialized json response
            }
            
            if let data = response.data, let utf8Text = String(data: data, encoding: .utf8) {
                print("Data: \(utf8Text)") // original server data as UTF8 string
            }
        }

    }
    func getDateFromServer(){
        Alamofire.request(last_updated_endpoint).responseJSON { response in
            print("Request: \(String(describing: response.request))")   // original url request
            print("Response: \(String(describing: response.response))") // http url response
            print("Result: \(response.result)")
            
            if let json = response.result.value {
                print("JSON: \(json)") // serialized json response
            }
            
            if let data = response.data, let utf8Text = String(data: data, encoding: .utf8) {
                print("Data: \(utf8Text)") // original server data as UTF8 string
                self.last_updated = utf8Text
                
            }
            
        }
     
    }
    
    
 }
