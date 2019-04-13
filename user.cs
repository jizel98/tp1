using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Tp
{
    #region User
    public class User
    {
        #region Member Variables
        protected string _email;
        protected string _nom;
        protected string _prenom;
        protected string _password;
        protected string _interet;
        protected string _gender;
        protected int _telephone;
        protected string _nationnalite;
        protected string _datedenaissance;
        #endregion
        #region Constructors
        public User() { }
        public User(string nom, string prenom, string password, string interet, string gender, int telephone, string nationnalite, string datedenaissance)
        {
            this._nom=nom;
            this._prenom=prenom;
            this._password=password;
            this._interet=interet;
            this._gender=gender;
            this._telephone=telephone;
            this._nationnalite=nationnalite;
            this._datedenaissance=datedenaissance;
        }
        #endregion
        #region Public Properties
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string Nom
        {
            get {return _nom;}
            set {_nom=value;}
        }
        public virtual string Prenom
        {
            get {return _prenom;}
            set {_prenom=value;}
        }
        public virtual string Password
        {
            get {return _password;}
            set {_password=value;}
        }
        public virtual string Interet
        {
            get {return _interet;}
            set {_interet=value;}
        }
        public virtual string Gender
        {
            get {return _gender;}
            set {_gender=value;}
        }
        public virtual int Telephone
        {
            get {return _telephone;}
            set {_telephone=value;}
        }
        public virtual string Nationnalite
        {
            get {return _nationnalite;}
            set {_nationnalite=value;}
        }
        public virtual string Datedenaissance
        {
            get {return _datedenaissance;}
            set {_datedenaissance=value;}
        }
        #endregion
    }
    #endregion
}