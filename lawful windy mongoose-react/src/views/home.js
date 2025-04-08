import React, { Fragment } from 'react'

import { Helmet } from 'react-helmet'

import Navbar8 from '../components/navbar8'
import Hero17 from '../components/hero17'
import Steps2 from '../components/steps2'
import Footer4 from '../components/footer4'
import './home.css'

const Home = (props) => {
  return (
    <div className="home-container">
      <Helmet>
        <title>Lawful Windy Mongoose</title>
        <meta property="og:title" content="Lawful Windy Mongoose" />
      </Helmet>
      <Navbar8
        page4Description={
          <Fragment>
            <span className="home-text10">Access the admin panel</span>
          </Fragment>
        }
        action1={
          <Fragment>
            <span className="home-text11">Search</span>
          </Fragment>
        }
        link2={
          <Fragment>
            <span className="home-text12">/report-lost-item</span>
          </Fragment>
        }
        page1={
          <Fragment>
            <span className="home-text13">Home</span>
          </Fragment>
        }
        link1={
          <Fragment>
            <span className="home-text14">/home</span>
          </Fragment>
        }
        page4={
          <Fragment>
            <span className="home-text15">Admin Panel</span>
          </Fragment>
        }
        page2={
          <Fragment>
            <span className="home-text16">Report Lost Item</span>
          </Fragment>
        }
        link4={
          <Fragment>
            <span className="home-text17">/admin-panel</span>
          </Fragment>
        }
        page1Description={
          <Fragment>
            <span className="home-text18">Return to the homepage</span>
          </Fragment>
        }
        page2Description={
          <Fragment>
            <span className="home-text19">Submit details of a lost item</span>
          </Fragment>
        }
        link3={
          <Fragment>
            <span className="home-text20">/claim-found-item</span>
          </Fragment>
        }
        page3={
          <Fragment>
            <span className="home-text21">Claim Found Item</span>
          </Fragment>
        }
        page3Description={
          <Fragment>
            <span className="home-text22">Claim an item you found</span>
          </Fragment>
        }
        action2={
          <Fragment>
            <span className="home-text23">Login</span>
          </Fragment>
        }
      ></Navbar8>
      <Hero17
        action2={
          <Fragment>
            <span className="home-text24">Claim Found Item</span>
          </Fragment>
        }
        action1={
          <Fragment>
            <span className="home-text25">Report Lost Item</span>
          </Fragment>
        }
        heading1={
          <Fragment>
            <span className="home-text26">Report or Claim Lost Items</span>
          </Fragment>
        }
        content1={
          <Fragment>
            <span className="home-text27">
              Welcome to Lost &amp; Found, where you can report lost items or
              claim found ones. Our platform makes it easy to reunite lost items
              with their owners.
            </span>
          </Fragment>
        }
      ></Hero17>
      <Steps2
        step1Description={
          <Fragment>
            <span className="home-text28">
              Fill out a form with details of the lost item and upload any
              relevant images.
            </span>
          </Fragment>
        }
        step3Description={
          <Fragment>
            <span className="home-text29">
              Admins will verify the claim to prevent fraud and ensure rightful
              ownership.
            </span>
          </Fragment>
        }
        step2Title={
          <Fragment>
            <span className="home-text30">Claim Found Item</span>
          </Fragment>
        }
        step2Description={
          <Fragment>
            <span className="home-text31">
              Search for found items matching your lost item and submit a claim
              with proof of ownership.
            </span>
          </Fragment>
        }
        step1Title={
          <Fragment>
            <span className="home-text32">Report Lost Item</span>
          </Fragment>
        }
        step3Title={
          <Fragment>
            <span className="home-text33">Admin Verification</span>
          </Fragment>
        }
        step4Description={
          <Fragment>
            <span className="home-text34">
              Log in securely using PHP, MySQL, and Bootstrap to access the Lost
              &amp; Found features.
            </span>
          </Fragment>
        }
        step4Title={
          <Fragment>
            <span className="home-text35">Secure Login</span>
          </Fragment>
        }
      ></Steps2>
      <Footer4
        link5={
          <Fragment>
            <span className="home-text36">FAQ</span>
          </Fragment>
        }
        link3={
          <Fragment>
            <span className="home-text37">Admin Login</span>
          </Fragment>
        }
        link1={
          <Fragment>
            <span className="home-text38">Report Lost Item</span>
          </Fragment>
        }
        termsLink={
          <Fragment>
            <span className="home-text39">Terms of Service</span>
          </Fragment>
        }
        link2={
          <Fragment>
            <span className="home-text40">Claim Found Item</span>
          </Fragment>
        }
        link4={
          <Fragment>
            <span className="home-text41">Contact Us</span>
          </Fragment>
        }
        cookiesLink={
          <Fragment>
            <span className="home-text42">Cookies Policy</span>
          </Fragment>
        }
        privacyLink={
          <Fragment>
            <span className="home-text43">Privacy Policy</span>
          </Fragment>
        }
      ></Footer4>
    </div>
  )
}

export default Home
