---
layout: 'layouts/project'
name: 3 things I learnt from developing an Amazon Alexa skill
summary: 'At the start of 2018 I decided to work on a skill I’d been meaning to try for a long time: writing an Alexa skill. I’d heard a lot of good things around developing Alexa skills, primarily how easy and quick it is to do. However, I found my normal development practices were restricted which made the process more complicated for me.'
tags:
  - blogs
published_date: 10-03-2019
---

<p class="blog__date">Published 10th March 2019</p>

# 3 things I learnt from developing an Amazon Alexa skill

At Government Digital Service (GDS), we have been participating in firebreaks: 1 week breaks between our quarterly missions to give people the opportunity to slow down their pace of working and scratch an itch. Since [this concept began in 2015](https://insidegovuk.blog.gov.uk/2015/02/06/gov-uks-firebreak-why-and-how-we-spent-a-month-working-differently/), there have been many firebreak projects, including: writing up and collating resources around how GOV.UK was built, improving the structured learning for our junior developers, and exploring how to build a Facebook Messenger chatbot for GOV.UK.

In the first firebreak of 2018, I decided to work on a skill I’d been meaning to try for a long time: writing an Alexa skill. Staying on topic with GOV.UK, I built a UK Bank Holidays skill which lets you query UK bank holiday information provided by the [GOV.UK Bank Holiday API](https://www.gov.uk/bank-holidays.json). This skill is now live, you can read more about it [on Amazon.co.uk](https://www.amazon.co.uk/Vanita-Barrett-UK-Bank-Holidays/dp/B078Z18S3G).

I’d heard a lot about how easy and quick it is to develop an Alexa skill. However, I found my normal development practices were restricted which made the process more complicated for me.

## 1. Developing with restricted testing is difficult

As a developer, I rely heavily on testing my code as I go along. Day-to-day, I’m regularly printing out responses and function returns to double check all steps in my code are working as expected. However, when developing an Alexa skill, although you’re able to test the logic locally, in order to check the skill as a whole you have to upload it and test it through the Alexa Developer Portal. This isn’t difficult, but slows down the development process, especially when making small refactoring changes.

<figure>
  <img src="/writing/images/alexa_skill_test.png" alt="Testing interface in Alexa Developer Portal"/>
  <figcaption>Testing interface in Alexa Developer Portal</figcaption>
</figure>

The Alexa Developer Portal testing environment doesn’t give you useful error messages if something goes wrong. If you’re using AWS Lambda to host your skill, I’d recommend using their testing functionality instead. AWS Lambda lets you create up to 10 JSON test events which are passed to your Lambda function for testing. When testing, you get to see the full JSON response and logs.

<figure>
  <img src="/writing/images/alexa_skill_lambda.png" alt="Testing interface in AWS Lambda"/>
  <figcaption>Testing interface in AWS Lambda</figcaption>
</figure>

## 2. Well organised documentation is arguably more important than thorough documentation
No one can accuse Amazon or AWS (Amazon Web Services) documentation of not being thorough, but can be almost impossible to find what you need.

<figure>
  <img src="/writing/images/alexa_skill_tabs.png" alt="Over 30 tabs open with documentation on how to build an Alexa skill."/>
  <figcaption>All the tabs I had open while developing this skill! The step-by-step guide on <a href="https://developer.amazon.com/docs/custom-skills/steps-to-build-a-custom-skill.html#step-1-design-a-voice-user-interface">Building a Custom Alexa Skill</a> itself links to 30 other pages.</figcaption>
</figure>

For me, AWS documentation is like falling down the rabbit hole in Alice in Wonderland: I discover AWS services I’ve never heard of and I find myself being drawn into a journey away from where I actually need to be. In my opinion, the documentation would benefit from:


**Simplifying**

Writing good documentation is a balancing act between explaining the minimum needed to understand and use the product, without explaining the whole world. Put this way: most people don’t need to read a whole DIY manual just to put together some flatpack furniture. In the same way, users shouldn’t have to click through multiple links to find the information they need. Consider simplifying the key points up front and provide links further down for those who want more detail.

**Providing examples**

When trying to explain how to achieve something in code, try and use an example. Even if it means picking a specific programming language when your documentation is language-agnostic, it will still serve as a good example. Most developers can translate your example to the particular situation they’re coding for.

**User research**

You test your applications with end users - why not documentation? This doesn’t have to involve recruiting external people for user testing, simply try testing it out on other people within your company that don’t have any prior knowledge. Set up a quick task for your users to complete, provide them with the documentation and see how they get on. This is a quick way to identify problems which you, as an expert user, might have missed.


## 3. It is important to test all possible user scenarios
Although it’s not necessary to own an Alexa device to develop a skill, I found it really helped when it came to testing. Although the Alexa Developer Portal is great for testing responses, it’s more tricky to test Amazon’s default intents (open; help; stop; cancel) and the edge-cases. For this, I used the beta testing option to enable the skill on my Alexa device. Luckily I did, because I actually had a bug which prevented the skill from opening!

It’s also important to note that the certification criteria for publishing your skill is quite strict and you don't get an immediate response once you submit your skill - it normally takes 1-2 days. I was required to rename the invocation name from “UK Bank Holidays” to “U.K. Bank Holidays” to ensure the pronunciation was as expected. Try and [check everything](https://developer.amazon.com/docs/custom-skills/certification-requirements-for-custom-skills.html) before you submit to avoid any back-and-forth with your submission.

Note: since creating this skill, bank holiday information is available as default on all Alexa devices.


