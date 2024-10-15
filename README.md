[![Review Assignment Due Date](https://classroom.github.com/assets/deadline-readme-button-22041afd0340ce965d47ae6ef1cefeee28c7c493a6346c4f15d667ab976d596c.svg)](https://classroom.github.com/a/O8GorTml)
| Name           | NRP        | Kelas     |
| ---            | ---        | ----------|
| Rayhan Fathurrahman Zata Amani | 5025221092 | Information Security (IUP) |
| Ihsan Adhika Rahadian | 5025221080 | Information Security (IUP) |
| Zefanya Teguh Foyd Silalahi | 5025221073 | Information Security (IUP) |
 
 In this assignment, we are asked to make a secure data Storage Web Application. The application must
 comply with GDPR (EU) UU PDP (Indonesia) regulations regarding the storage and handling of
 private information. We are required to implement encryption techniques and ensure secure access
 to the data.
 
 Requirements:
 1. Data Storage:
 ○ Theapplication must store users' private data in a database. Refer to GDPR (EU)/UU
 PDPfor definitions of private data.
 ○ Private data includes user-provided ID card images, PDF/DOC/XLS files, and video
 files.
 2. Data Encryption:
 ○ Allstored data (files and images) must be encrypted using AES, RC4, and DES algorithms.
 ○ Implementoneof the following non-ECB block cipher operation modes for AES and DES: CBC, CFB, OFB, or CTR.
 3. Data Access:
 ○ Usersmustbeableto retrieve their data in its decrypted form after entering a valid username and password.
 ○ Ensure secure and efficient user authentication for data access.
 4. Performance and Analysis:
 ○ Downloadandtest the encrypted data multiple times, measuring the running time of each download and encryption process.
 ○ Analyzethe differences between the encryption algorithms (AES, RC4, DES) in terms of performance (running time) and the resulting cipher text.
 5. Technology:
 ○ Youmayuseanysuitable cryptography library (e.g., BouncyCastle, Java Crypto, PyCrypto) in any programming language.
 ○ The programmust be bug-free to receive full credit.
 6. Report:
 ○ Writeabrief report detailing the encryption methods used, justifying your choices, and providing the performance analysis of each algorithm.
 ○ Discuss the results of your measurements, explaining any observed performance
 differences.
 7. Academic Integrity:
 ○ Plagiarism or any form of academic misconduct will result in a zero mark.

 First, For the Website, we created the Register page and the login page.
 To test it, we make an example of the first registrant, the image is inserted below :
 ![WhatsApp Image 2024-10-15 at 23 39 06_3ddbde13](https://github.com/user-attachments/assets/69cde254-216a-4119-823c-1eb11d046dfe)

 And then, here is a picture of the database after the registrant has entered their data.
![WhatsApp Image 2024-10-15 at 23 41 08_d8f0be86](https://github.com/user-attachments/assets/330b915d-f8d9-4bf2-b097-7efaa6094ce0)

 And for the next part, we created a feature for people to post something in the website. Here is the design for our post page and the result after someone posted something in the website : 
 ![WhatsApp Image 2024-10-15 at 23 42 04_53793658](https://github.com/user-attachments/assets/abbb8b1f-c0f3-47a5-b3a7-0483ebeee3ed)
 ![WhatsApp Image 2024-10-15 at 23 42 17_46e33ddc](https://github.com/user-attachments/assets/5b61e69e-ecca-473c-9bfa-afe77ee0129e)

 And then for the next part, we added a part of the website to edit the post people had made before. Here are the picture examples when someone edits their post : 
![WhatsApp Image 2024-10-15 at 23 43 32_37c589e9](https://github.com/user-attachments/assets/91f6a809-a4d3-434f-9b6e-81d224dd5b9c)
![WhatsApp Image 2024-10-15 at 23 43 47_9be5cd2b](https://github.com/user-attachments/assets/3b13453e-cb1f-40bd-898f-1e7dd0f7510d)

And then, this is the result of the post page after someone has already edited their post : 
![WhatsApp Image 2024-10-15 at 23 43 47_e5f59992](https://github.com/user-attachments/assets/2e51f376-4640-4009-96cd-c120cc9b37b0)

And for the last part, here is a picture of the database after someone edited their post, because if someone use the edit feature, the system will keep track of it and inputted it to the database.
![WhatsApp Image 2024-10-15 at 23 44 17_c5ebd545](https://github.com/user-attachments/assets/e2833a67-1cf9-42d4-8aab-bd4a855ce585)

So that is all about the Website. Now we’re going to discuss about the encryption part. For the encryption part, our group used a system called “bcrypt”
![WhatsApp Image 2024-10-15 at 23 41 08_d8f0be86](https://github.com/user-attachments/assets/330b915d-f8d9-4bf2-b097-7efaa6094ce0)







