package Group;

import java.util.Vector;

public class OurGroup {
	private Vector<String> groupMembers;
	
	public OurGroup() {
		groupMembers = new Vector<String>();
		groupMembers.add("Chalermchai Kamlungdach");
		groupMembers.add("Thitipon Sawangsri");
		groupMembers.add("Peerawat Wongmek")
		
	}
	
	public Vector<String> getGroupMemmbers(){
		return groupMembers;
	}
}
