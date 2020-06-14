using System;
using System.Linq;

namespace Homework2
{
    class Homework2
    {
        // Savarjisho 5.1.1
        public class Airplane
        {
            private double fuelCapacity;
            private double distance;

            public int passengersCount;
            public int ticketsSold;
        }

        // 5-6 tavis savarjishoebs moicavs... Ro davamtavre kodis wera vnaxe rom bevri rame ukve gamoyenebuli mqonda shemdegi savarjishoebidan.
        public class Student
        {

            private string firstName;
            private string lastName;
            private int age;
            private int[] grades;

            public string university;
            public string course;


            public Student(params int[] grades)
            {
                this.grades = grades;
            }

            private void privateDeclareStudent(string firstName, string lastName, int age, string university, string course)
            {
                this.firstName = firstName;
                this.lastName = lastName;
                this.age = age;
                this.grades = grades;
                this.university = university;
                this.course = course;

            }

            public void declareStudent(string firstName, string lastName, int age, string university, string course)
            {
                privateDeclareStudent(firstName, lastName, age, university, course);
            }
            
            public void getStudentInfo()
            {
                Console.WriteLine("Student name: " + firstName);
                Console.WriteLine("Student surname: " + lastName);
                Console.WriteLine("Student age: " + age);
                Console.WriteLine("Student university: " + university);
                Console.WriteLine("Student course: " + course);
                Console.WriteLine("Student's average of grades: " + GradesAverage(grades));
            }

            public float GradesAverage(params int[] grades)
            {
                int sum = 0;

                foreach (int grade in grades)
                {
                    sum += grade;
                }

                return sum / grades.Count();

            }
        }
        // Savarjisho 5.1.3
        public class Train
        {
            private int carriagesCount;
            private int passengersCount;

            public double ticketPrice;
            public int ticketsSold;
        }


        static void Main(string[] args)
        {
            // 5.x.x-6.x.x
            // konstruqtoris gamoyenebis miznit, tavidan students mxolod nishnebi gadaecema parametrebad
            Student Shota = new Student(80, 60, 65, 51, 51, 100, 83, 100, 100, 89);
            Shota.declareStudent("Shota", "Ivanidze", 19, "GAU", "Information Technologies");
            Shota.getStudentInfo();

            Console.ReadKey();
        }
    }
}
