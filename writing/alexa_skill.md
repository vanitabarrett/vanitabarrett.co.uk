# 3 Things I Learnt from Developing an Alexa Skill

At Government Digital Service (GDS), we have been participating in firebreaks: 1 week breaks between our quarterly missions to give people the opportunity to slow down their pace of working and scratch an itch. Since [this concept began in 2015](https://insidegovuk.blog.gov.uk/2015/02/06/gov-uks-firebreak-why-and-how-we-spent-a-month-working-differently/), we’ve had people writing up and collating resources around how GOV.UK was built, improving the structured learning for our Junior Developers, and exploring how to build a Facebook Messenger chatbot for GOV.UK.

In the first firebreak of 2018, I decided to work on a skill I’d been meaning to try for a long time: writing an Alexa skill. Staying on topic with GOV.UK, I built a UK Bank Holidays skill which lets you query UK bank holiday information provided by this JSON API. The skills is now live, you read more about it [on Amazon.co.uk](https://www.amazon.co.uk/Vanita-Barrett-UK-Bank-Holidays/dp/B078Z18S3G).

I’d heard a lot of good things around developing Alexa skills, primarily how easy and quick it is to do. However, I found my normal development practices were restricted which made the process more complicated for me.

##1. Developing with restricted testing is difficult

As a developer, I rely heavily on testing my code as I go along. Day-to-day, I’m regularly printing out responses and function returns to double check all steps in my code are working as expected. However, when developing an Alexa skill, although you’re able to test the logic locally, in order to check the skill as a whole you have to upload it and test it through the Alexa Developer Portal. This isn’t difficult, but slows down the development process, especially when making small refactoring changes.

##[Photo of Alexa Developer Portal testing screen]

The Alexa Developer Portal testing environment doesn’t give you useful error messages if something goes wrong. If you’re using AWS Lambda to host your skill, I’d recommend using their testing functionality instead. If you want to test using a real request which might be made to your skill, simply replace the JSON in Step 3 with JSON generated in the Alexa Developer Portal (as shown on the left below).

##[Photo of Alexa Developer Portal Testing screen with JSON highlighted somehow]

##2. Well organised documentation is arguably more important than thorough documentation
No one can accuse the AWS (Amazon Web Services) documentation of not being thorough, but it’s almost impossible to find what you need.

[Photo of the number of AWS tabs I had open when developing Alexa skill]

For me, AWS documentation is like falling down the rabbit hole in Alice in Wonderland. I discover AWS services I’ve never heard of and I find myself being drawn into a journey away from where I actually need to be. In my opinion, the documentation would benefit from:


**Simplifying**

Writing good documentation is a balancing act between explaining the minimum needed to understand and use the product, without explaining the whole world. Put this way: most people don’t need to read a whole DIY manual just to put together some flatpack furniture. In the same way, users shouldn’t have to click through multiple links to find the information they need. Consider simplifying the key points up front and provide links further down for those who want more details.

**Providing examples**

When trying to explain how to achieve something in code, try and use an example. Even if it means picking a specific programming language when your documentation is language-agnostic, it will still serve as a good example. Most developers can translate your example to the particular situation they’re coding for.

**User research**

You test your applications with end users - why not documentation? This doesn’t have to involve recruiting external people for user testing, simply try testing it out on other people within your company that don’t have any prior knowledge. Set up a quick task for your users to complete, provide them with the documentation and see how they get on. This is a quick way to identify problems which you, as an expert user, might have missed.


##3. It is important to test all possible user scenarios
Although it’s not necessary to own an Alexa device to develop a skill, I found it really helped when it came to testing. Although the Alexa Developer Portal is great for testing the responses, it’s more tricky to test Amazon’s default intents (open; help; stop; cancel) and the edge-cases. For this, I used the beta testing option to enable the skill on my Alexa device. Luckily I did, because I actually had a bug which prevented the skill from opening!

It’s also important to note that the certification criteria for publishing your skill is quite strict, for example: I had to rename the invocation name from “UK Bank Holidays” to “U.K. Bank Holidays” to ensure the pronunciation was as expected. Try and check everything before you submit to avoid back-and-forth with your submission.

Note: since creating this skill, bank holiday information is available as default on all Alexa devices.


