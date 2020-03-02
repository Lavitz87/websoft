using System.Collections.Generic;
using Microsoft.AspNetCore.Mvc;
using webapp.Models;
using webapp.Services;

namespace webapp.Controllers
{
    [ApiController]
    [Route("api/[controller]")]
    public class AccountsController : ControllerBase
    {
        public AccountsController(JsonFileAccountService accountService)
        {
            AccountService = accountService;
        }

        public JsonFileAccountService AccountService { get; }

        [HttpGet]
        public IEnumerable<Account> Get()
        {
            return AccountService.GetAccounts();
        }
   

        [HttpGet("{id}")]
        public ActionResult<Account> GetAccountById(int id)
        {
        Account result = null;
        var accounts =  AccountService.GetAccounts();
        foreach (var account in accounts)
        {
            if(account.Number == id){
                result = account;
            }
        } 

        if (result == null)
            {
                return NotFound();
            }

            return result;

        }

    }
}
