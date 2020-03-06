using System;
using System.IO;
using System.Text.Json;
using System.Text.Json.Serialization;
using System.Collections.Generic;
using ConsoleTables;
using System.Linq;

namespace console
{
    class Program
    {
        static void Main(string[] args)
        {
            bool showMenu = true;
            while (showMenu)
            {
                showMenu = MainMenu();
            }
        }
        private static bool MainMenu()
        {
            
            var accounts = ReadAccounts();
            
            Console.WriteLine("Choose an option:");        
            Console.WriteLine("1) Read Accounts");
            Console.WriteLine("2) Read Account by number");
            Console.WriteLine("Write 'exit' to exit");
            Console.Write("\r\nSelect an option: ");
 
            switch (Console.ReadLine())
            {
             
                case "1":

                    var table = new ConsoleTable("Number", "Owner", "Label", "Balance");
                                    
                    foreach (var account in accounts)
                    {
                        table.AddRow(account.Number, account.Owner, account.Label, account.Balance);
                    }
                    
                    table.Write();
                    Console.WriteLine();

                    return true;
                case "2":
                    Console.Write("Enter Account number: ");
                   var accountNbr = Console.ReadLine();
                   foreach (var account in accounts)
                   {
                       if (account.Number.ToString().Equals(accountNbr))
                       {
                           var singleTable = new ConsoleTable("Number", "Owner", "Label", "Balance");
                           singleTable.AddRow(account.Number, account.Owner, account.Label, account.Balance);
                           singleTable.Write();
                           Console.WriteLine();  

                       }
                      
                   }
                   Console.WriteLine("No such account number !");           
                    return true;    
                case "exit":
                    Console.WriteLine("Goodbye!");
                    return false;    
                default:
                    return true;
            }
        }
 
     
        static IEnumerable<Account> ReadAccounts()
        {
            String file = "../../data/account.json";

            using (StreamReader r = new StreamReader(file))
            {
                string data = r.ReadToEnd();
                // Console.WriteLine(data);

                var json = JsonSerializer.Deserialize<Account[]>(
                    data,
                    new JsonSerializerOptions {
                        PropertyNameCaseInsensitive = true
                    }     
                );
                //Console.WriteLine(json[0]);
                return json;
            }
        }
        
    }
    public class Account
    {
        public int Number { get; set; }
        public int Balance { get; set; }
        public string Label { get; set; }
        public int Owner { get; set; }
        
        public override string ToString() {
            return JsonSerializer.Serialize<Account>(this);
        }
    }
}