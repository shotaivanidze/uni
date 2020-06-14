using System;
using System.Reflection.Metadata.Ecma335;

namespace Davaleba
{
    class Program
    {
        public interface IIndexInterface
        {
            int this[int index]
            {
                get;
                set;
            }
        }

        class IndexerClass : IIndexInterface
        {
            int[] _arr = new int[5];
            public int this[int index]
            {
                get
                {
                    if (index >= 0 && index < _arr.Length)
                    {
                        return _arr[index];
                    }

                    return 0;
                }
                set
                {
                    if (index >= 0 && index < _arr.Length && index % 2 != 0)
                    {
                        _arr[index] = value;
                    }
                    else if (index >= 0 && index < _arr.Length)
                    {
                        _arr[index] = value + 1;
                    }
                }
            }
        }

        static void Main()
        {
            IndexerClass indexer = new IndexerClass();
            indexer[1] = 5;
            indexer[2] = 2;
            indexer[3] = 13;
            indexer[4] = 20;
            indexer[-2] = -4; // Not in the boundries of the array

            int val1 = indexer[1];
            int val2 = indexer[2];
            int val3 = indexer[3];
            int val4 = indexer[4];
            int val5 = indexer[-2]; // Not in the boundries of the array

            Console.WriteLine(val1);
            Console.WriteLine(val2);
            Console.WriteLine(val3);
            Console.WriteLine(val4);
            Console.WriteLine(val5); // Not in the boundries of the array


        }
    }

    
}
