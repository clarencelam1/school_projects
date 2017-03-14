module IDEX
(
	input stall,
	input clk,
	input [31:0] reg1,
	input [31:0] reg2,
	input [31:0] sign_extend,
	input [31:0] pc_four,
	input [31:0] shift_left_pad,
	input [31:0] instruction,
	
	output reg [31:0] reg1_out,
	output reg [31:0] reg2_out,
	output reg [31:0] sign_extend_out,
	output reg [31:0] pc_four_out,
	output reg [31:0] shift_left_pad_out,
	output reg [31:0] instruction_out, 
	
	//EX
	
	input in_jump_out,
	input in_shift_out,	
	input in_alu_mux_out,
	input [5:0] in_func_in,
	input in_jump_register_out,
	input in_write_register_out,
	input in_store_byte,
	
	//MEM
	input [1:0] in_size_in,
	input in_mem_to_reg_out,
	input in_mem_read_out,
	input in_mem_write_out,
	input in_load_byte,

	
	//WB
	input in_reg_dest_out,
	input in_reg_write_out,
	input in_write_out,
	input in_jump_and_link_out,
	input in_write_register_data_out,
	
	/////////
	
	
	//EX
	
	output reg jump_out,
	output reg shift_out,
	output reg alu_mux_out,
	output reg [5:0]func_in,
	output reg jump_register_out,
	output reg write_register_out,
	output reg store_byte,
	
	//MEM
	output reg [1:0] size_in,
	output reg mem_to_reg_out,
	output reg mem_read_out,
	output reg mem_write_out,
	output reg load_byte,

	
	//WB
	output reg reg_dest_out,
	output reg reg_write_out,
	output reg write_out,
	output reg jump_and_link_out,
	output reg write_register_data_out


);

initial 
	begin
	

		//initialize everything to 0
		reg1_out 							<= 32'd0;
		reg2_out								<= 32'd0;
		sign_extend_out					<= 32'd0;
		pc_four_out							<= 32'd0;
		shift_left_pad_out				<= 32'd0;
		instruction_out					<= 32'd0;
		
		//EX
		jump_out								<= 1'b0;
		shift_out							<= 1'b0;
		reg_dest_out						<= 1'b0;
		alu_mux_out							<= 1'b0;
		func_in								<= 6'd0;		
		jump_register_out					<= 1'b0;
		write_register_out				<= 1'b0;
		store_byte							<= 1'b0;
	
		//MEM
		size_in								<= 2'd0;
		mem_to_reg_out						<= 1'b0;
		mem_read_out						<= 1'b0;
		mem_write_out						<= 1'b0;
		load_byte							<= 1'b0;

		//WB
		reg_write_out						<= 1'b0;
		write_out							<= 1'b0;
		jump_and_link_out					<= 1'b0;
		write_register_data_out			<= 1'b0;
	end

always @(posedge clk)
	begin
	
		if(stall == 1'b1)
		begin
		reg1_out 							<= 32'd0;
		reg2_out								<= 32'd0;
		sign_extend_out					<= 32'd0;
		pc_four_out							<= 32'd0;
		shift_left_pad_out				<= 32'd0;
		instruction_out					<= 32'd0;
		
		//EX
		jump_out								<= 1'b0;
		shift_out							<= 1'b0;
		reg_dest_out						<= 1'b0;
		alu_mux_out							<= 1'b0;
		func_in								<= 6'd0;		
		jump_register_out					<= 1'b0;
		write_register_out				<= 1'b0;
		store_byte							<= 1'b0;
	
		//MEM
		size_in								<= 2'd0;
		mem_to_reg_out						<= 1'b0;
		mem_read_out						<= 1'b0;
		mem_write_out						<= 1'b0;
		load_byte							<= 1'b0;

		//WB
		reg_write_out						<= 1'b0;
		write_out							<= 1'b0;
		jump_and_link_out					<= 1'b0;
		write_register_data_out			<= 1'b0;
		end
		else
		
		begin
		reg1_out 							<= reg1;
		reg2_out								<= reg2;
		sign_extend_out					<= sign_extend;
		pc_four_out							<= pc_four;
		shift_left_pad_out				<= shift_left_pad;
		instruction_out					<= instruction;
		jump_out								<= in_jump_out;
		shift_out							<= in_shift_out;
		reg_dest_out						<= in_reg_dest_out;
		
		//clarence started
		
		alu_mux_out							<= in_alu_mux_out;
		
		jump_register_out					<= in_jump_register_out;
		write_register_out				<= in_write_register_out;
		store_byte							<= in_store_byte;
	
	//MEM
		size_in								<= in_size_in;
		mem_to_reg_out						<= in_mem_to_reg_out;
		mem_read_out						<= in_mem_read_out;
		mem_write_out						<= in_mem_write_out;
		load_byte							<= in_load_byte;

		func_in								<= in_func_in;
		mem_write_out						<= in_mem_write_out;
		reg_write_out						<= in_reg_write_out;
	//WB
		reg_write_out						<= in_reg_write_out;
		write_out							<= in_write_out;
		jump_and_link_out					<= in_jump_and_link_out;
		write_register_data_out			<= in_write_register_data_out;
		end
		

			
	end
endmodule

