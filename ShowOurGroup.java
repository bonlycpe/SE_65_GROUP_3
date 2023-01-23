package Group;

import java.util.Iterator;

public class ShowOurGroup {

     public static void main(String[] args) {
          OurGroup us;
          us = new OurGroup();
          Iterator itr = us.getGroupMemmbers().iterator();
          while (itr.hasNext()) {
               System.out.println(itr.next());
          }

     }

}