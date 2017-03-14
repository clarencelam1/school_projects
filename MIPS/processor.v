module processor(
    input clock,
    input reset,
    //these ports are used for serial IO and 
    //must be wired up to the data_memory module
    input [7:0] serial_in,
    input serial_valid_in,
    input serial_ready_in,
    output [7:0] serial_out,
    output serial_rden_out,
    output serial_wren_out
);

//pc wires
wire [32:0] pc_out_four;
wire [31:0] pc_address;
wire [32:0] pc_branch_adder_out;

//inst_rom wires
wire [31:0] alu_out;
wire [31:0] readdata_out;
wire [31:0] instr_out;
wire [31:0] reg_out_1;
wire [31:0] reg_out_2;
wire [31:0] extended_out;

//wire [5:0] opcode;
wire [4:0] mux_dest_reg_out;
wire [31:0] mux_alu_src_out;
wire [31:0] data_mem_mux;
wire [31:0] shift_left_se_out;
wire [31:0] pc_branch_out;
wire [31:0] mux_jump_out;
wire [5:0] func_in;

//control wire
wire reg_dest_out;
wire alu_mux_out;
wire mem_to_reg_out;
wire reg_write_out;
wire mem_read_out;
wire mem_write_out;
wire write_out;
wire jump_register_out;
wire jump_and_link_control;
wire write_register_control;
wire write_data_control;
wire shift_control;
wire sign_control;
wire store_byte_control;
wire load_byte_control;

//lab4 control branch wire
wire alu_control_jump_out;
wire [1:0] control_size_in;
wire alu_control_branch_out;
wire control_mux_jump_out;
wire or_gate_alu_pc_out;
wire [31:0] mux_pc_out;
wire [31:0] shift_left_pad_out;
wire [31:0] shift16_pad_out;
wire [31:0] write_register_out;
wire [31:0]	mux_jump_register_out;
wire [31:0] mux_jump_and_link_out;
wire [4:0] mux_jal_mux_out;
wire [31:0] mux_write_data_out;
wire [31:0] mux_shift_out;
wire [31:0] store_bytes_out;
wire [31:0] load_bytes_out;
wire [31:0] mux_store_bytes_out;
wire [31:0] mux_load_bytes_out;

//lab5 stage1 wires
wire [31:0] stage1_instruction_out_1;
wire [31:0] stage1_pc_out_four;
wire start;



//lab5 stage 2 wires
wire flush;
wire stall;
wire [31:0] stallpc_out;
wire [31:0] stage_2_reg1_out;
wire [31:0] stage_2_reg2_out;
wire [31:0] stage_2_sign_extend_out;
wire [31:0] stage_2_pc_four_out;
wire [31:0] stage_2_shift_left_pad_out;
wire [31:0] stage_2_instruction_out;

	//stage 2 EX

wire stage_2_jump_out;
wire stage_2_shift_out;
wire stage_2_reg_dest_out;
wire stage_2_alu_mux_out;
wire [5:0] stage_2_func_in;
wire stage_2_jump_register_out;
wire stage_2_write_register_out;
wire stage_2_store_byte;
	
	//stage 2 MEM
wire [1:0] stage_2_size_in;
wire stage_2_mem_to_reg_out;
wire stage_2_mem_read_out;
wire stage_2_mem_write_out;
wire stage_2_load_byte;

	
	//stage 2 WB
wire stage_2_reg_write_out;
wire stage_2_write_out;
wire stage_2_jump_and_link_out;
wire stage_2_write_register_data_out;

//STAGE 3 MEM 

wire [1:0] stage3_size_in;
wire stage3_mem_to_reg;
wire stage3_mem_read_out;
wire stage3_mem_write_out;
wire stage3_load_byte;

//REGISTERS NEEDED FOR STAGE 3
wire [31:0] stage3_alu_out;
wire [31:0] stage3_store_bytes_out;
wire [31:0] stage_3_instruction_out;
	

//STAGE 3 WB
wire stage3_reg_write_out;
wire stage3_write_out;
wire stage3_write_register_data_out;
wire stage3_write_register;
wire [4:0] stage3_destination_register;
wire [31:0]stage_3_pc_four_out;
wire [32:0] pc_out_eight;

//STAGE 4 WB wires

wire stage4_reg_write_out;
wire [31:0] stage4_write_register_data;
wire [4:0] stage4_write_register_destination;
wire stallpc;





control
    my_control(
    
    .instruction(stage1_instruction_out_1[31:26]),
    .instruction_func_in(stage1_instruction_out_1[5:0]),
	 .instruction_20_16(stage1_instruction_out_1[20:16]),
    .sign(sign_control),
    .reg_dest_out(reg_dest_out),
    .alu_mux_out(alu_mux_out),
    .mem_to_reg_out(mem_to_reg_out),
    .reg_write_out(reg_write_out),
    .mem_read_out(mem_read_out),
    .mem_write_out(mem_write_out),
	 .func_in(func_in),
	 .shift_out(shift_control),
	 //need to verify
	 .jump_out(control_mux_jump_out),
	 .jump_register_out(jump_register_out),
	 .jump_and_link_out(jump_and_link_control),
	 .write_register_data_out(write_data_control),
	 .write_out(write_out),
	 .write_register_out(write_register_control),
	 .size_in(control_size_in),
	 .store_byte(store_byte_control),
	 .load_byte(load_byte_control)
	 //.branch_out(control_mux_branch_out),
	 
);
pc_register
    my_pc(
    
    .clock(clock),
    .reset(reset),
    .enable(1'b1),
    .pc_address(stallpc_out),
    .pc_out(pc_address)
	 
);

adder
#(.W(32))
	 adder_pc_four(	 
	.inA(pc_address),
	.inB(4),
	.out(pc_out_four)
	
);



inst_rom#(
.ADDR_WIDTH(10),
.INIT_PROGRAM("C:/Users/jptruong/Desktop/lab2/test.inst_rom.memh")
)
    instruction(  
	 
    .clock(clock),
    .reset(reset),
    .addr_in(stallpc_out),
    .data_out(instr_out)
	 
);

mux
#(.W(5))
    mux_reg_dest(
    
    .A_in(stage_2_instruction_out[20:16]),
    .B_in(stage_2_instruction_out[15:11]),
    .sel_in(stage_2_reg_dest_out),
    .Out_out(mux_dest_reg_out)
    
);

register_file
    reg_file(
    
    .clk(clock),
    .reset(reset),
    .read_addrA(stage1_instruction_out_1[25:21]),
    .read_addrB(stage1_instruction_out_1[20:16]),
    .write_reg(stage4_write_register_destination),
    .we_in(stage4_reg_write_out),
    .write_data(stage4_write_register_data),
    .readdata_outA(reg_out_1),
    .readdata_outB(reg_out_2)

);


sign_extend
    se(
        
    .extend_in(stage1_instruction_out_1[15:0]),
    .sign(sign_control),
    .extended_out(extended_out)
	 
);

mux
#(.W(32))
    mux_alu_src(
    
    .A_in(stage_2_reg2_out),
    .B_in(stage_2_sign_extend_out),
    .sel_in(stage_2_alu_mux_out),
    .Out_out(mux_alu_src_out)
    
);



alu
    alu_1(
	 
    .Func_in(stage_2_func_in), 
    .A_in(mux_shift_out), 
    .B_in(mux_alu_src_out),
    .O_out(alu_out),
    .Branch_out(alu_control_branch_out), 
    .Jump_out(alu_control_jump_out)
	 
);

shift

	shift_left_se(
	.inA(stage_2_sign_extend_out),
	.out(shift_left_se_out)
	
);

shift_pad

	shift_left_pad(
	.inA(stage1_instruction_out_1[25:0]),
	.inB(stage1_pc_out_four[31:28]),
	.out(shift_left_pad_out)
	
);

adder
#(.W(32))
 pc_branch_adder(
 
	.inA(stage_2_pc_four_out),
	.inB(shift_left_se_out),
	.out(pc_branch_adder_out)
	
);

mux
#(.W(32))
    mux_jump(
    
    .A_in(pc_branch_adder_out[31:0]),
    .B_in(stage_2_shift_left_pad_out),
    .sel_in(stage_2_jump_out),
    .Out_out(mux_jump_out)
    
);
	
data_memory 
    data_mem(
    
    .clock(clock),
    .reset(reset),
    .addr_in(stage3_alu_out),
    .re_in(stage3_mem_read_out),
    .we_in(stage3_mem_write_out),
    .size_in(stage3_size_in),
    .writedata_in(stage3_store_bytes_out),
    .readdata_out(readdata_out),
    .serial_in(serial_in),
    .serial_ready_in(serial_ready_in),
    .serial_valid_in(serial_valid_in),
    .serial_out(serial_out),
    .serial_rden_out(serial_rden_out),
    .serial_wren_out(serial_wren_out)

);
	 
mux
#(.W(32))
    mux_data_mem_bit(
    
    .A_in(stage3_alu_out),
    .B_in(mux_load_bytes_out),//LOOK HERE
    .sel_in(stage3_mem_to_reg),
    .Out_out(data_mem_mux)
    
);

//FEED THIS INTO MEM PIPELINE REGISTER
or_gate
    or_gate_alu_pc(
	 
    .A_in(alu_control_branch_out),
    .B_in(alu_control_jump_out),
    .out(or_gate_alu_pc_out)
    
);


//CHANGE SEL IN 
mux
#(.W(32))
    mux_pc(
    
    .A_in(pc_out_four[31:0]),
    .B_in(mux_jump_out),
    .sel_in(or_gate_alu_pc_out),
    .Out_out(mux_pc_out)
    
);

shift16
	shift16_pad(
	
	.inA(stage_3_instruction_out[15:0]),
	.out(shift16_pad_out)
	
);

mux
#(.W(32))
    mux_lui(
    
    .A_in(data_mem_mux),
    .B_in(shift16_pad_out),
    .sel_in(stage3_write_out),
    .Out_out(write_register_out)
    
);


mux
#(.W(32))
    mux_jump_register(
    
    .A_in(mux_pc_out),
    .B_in(stage_2_reg1_out),
    .sel_in(stage_2_jump_register_out),
    .Out_out(mux_jump_register_out)
    
);

mux
#(.W(32))
    mux_jump_register_and_link(
    
    .A_in(mux_jump_register_out),
    .B_in(stage_2_shift_left_pad_out),
    .sel_in(stage_2_jump_and_link_out),
    .Out_out(mux_jump_and_link_out)
    
);

mux
#(.W(5))
    mux_write_registerjal(
    
    .A_in(stage3_destination_register),
    .B_in(5'b11111),
    .sel_in(stage3_write_register),
    .Out_out(mux_jal_mux_out)
    
);

mux
#(.W(32))
    mux_write_datajalr(
    
    .A_in(write_register_out),
    .B_in(pc_out_eight[31:0]),//LOOK HERE !!!!!!! STAGE 4 THIS
    .sel_in(stage3_write_register_data_out),
    .Out_out(mux_write_data_out)
    
);


adder
#(.W(32))
	 adder_pc_eight(	 
	.inA(stage_3_pc_four_out),
	.inB(4),
	.out(pc_out_eight)
);


mux
#(.W(32))
    mux_shift(
	 
    .A_in(stage_2_reg1_out),
    .B_in({27'd0,stage_2_instruction_out[10:6]}),
    .sel_in(stage_2_shift_out),
    .Out_out(mux_shift_out)
    
);

/*
store_bytes
    store_bytes(
    
    .A_in(stage_2_reg2_out),
	 .opcode(stage_2_instruction_out[31:26]),
	 .shift_amount(alu_out[1:0]),
    .Out_out(store_bytes_out)
    
);

mux
#(.W(32))
    mux_store_bytes(
	 
    .A_in(stage_2_reg2_out),
    .B_in(store_bytes_out),
    .sel_in(stage_2_store_byte),
    .Out_out(mux_store_bytes_out)
    
);
*/

load_bytes
    load_bytes(
    
    .A_in(readdata_out),
	 .opcode(stage_3_instruction_out[31:26]),
	 .shift_amount(stage3_alu_out[1:0]),
    .Out_out(load_bytes_out)
    
);

mux
#(.W(32))
    mux_load_bytes(
	 
    .A_in(readdata_out),
    .B_in(load_bytes_out),
    .sel_in(stage3_load_byte),
    .Out_out(mux_load_bytes_out)
    
);

IFID
	stage1(
	.start(start),
	.flush(flush),
	.stall(stall),
	.clk(clock),
	.pc_four(pc_out_four[31:0]),
	.instruction(instr_out),
	.out_instruction(stage1_instruction_out_1),
	.pc_out_four(stage1_pc_out_four)
		
);

controlhazard
	detect(
	
	
	.clk(clock),
	.start(start),
	.branchorjump(or_gate_alu_pc_out),
	.id_rs(stage1_instruction_out_1[25:21]),
	.id_rt(stage1_instruction_out_1[20:16]),
	.mem_register(stage3_destination_register),
	.ex_destination(mux_dest_reg_out),
	.wb_destination(stage4_write_register_destination),
	.instruction(stage_2_instruction_out),
	.flush(flush),
	.stall(stall),
	.stallpc(stallpc)
	
);



mux
#(.W(32))
    mux_stallpc(
    
    .A_in(mux_jump_and_link_out),
    .B_in(pc_address),
    .sel_in(stallpc),
    .Out_out(stallpc_out)
    
);

IDEX 
	stage2(

	.stall(stall),
	.clk(clock),
	.reg1(reg_out_1),
	.reg2(reg_out_2),
	.sign_extend(extended_out),
	.pc_four(stage1_pc_out_four),
	.shift_left_pad(shift_left_pad_out),
	.instruction(stage1_instruction_out_1),
	
	
	.reg1_out(stage_2_reg1_out),
	.reg2_out(stage_2_reg2_out),
	.sign_extend_out(stage_2_sign_extend_out),
	.pc_four_out(stage_2_pc_four_out),
	.shift_left_pad_out(stage_2_shift_left_pad_out),
	.instruction_out(stage_2_instruction_out), 
	
	//EX
	.in_jump_out(control_mux_jump_out),
	.in_shift_out(shift_control),
	.in_reg_dest_out(reg_dest_out),
	.in_alu_mux_out(alu_mux_out),
	.in_func_in(func_in),
	.in_jump_register_out(jump_register_out),
	.in_write_register_out(write_register_control),
	.in_store_byte(store_byte_control),
	
	//MEM
	.in_size_in(control_size_in),
	.in_mem_to_reg_out(mem_to_reg_out),
	.in_mem_read_out(mem_read_out),
	.in_mem_write_out(mem_write_out),
	.in_load_byte(load_byte_control),

	
	//WB
	.in_reg_write_out(reg_write_out),
	.in_write_out(write_out),
	.in_jump_and_link_out(jump_and_link_control),
	.in_write_register_data_out(write_data_control),
	
	/////////
	
	
	//EX
	.jump_out(stage_2_jump_out),
	.shift_out(stage_2_shift_out),
	.alu_mux_out(stage_2_alu_mux_out),
	.func_in(stage_2_func_in),
	.jump_register_out(stage_2_jump_register_out),
	.store_byte(stage_2_store_byte),
	.jump_and_link_out(stage_2_jump_and_link_out),
	
	//MEM
	.size_in(stage_2_size_in),
	.mem_to_reg_out(stage_2_mem_to_reg_out),
	.mem_read_out(stage_2_mem_read_out),
	.mem_write_out(stage_2_mem_write_out),
	.load_byte(stage_2_load_byte),

	
	//WB
	.write_register_out(stage_2_write_register_out),
	.reg_dest_out(stage_2_reg_dest_out),
	.reg_write_out(stage_2_reg_write_out),
	.write_out(stage_2_write_out),	
	.write_register_data_out(stage_2_write_register_data_out)

	
);

EXMEM
	stage3
	(
		//INPUTS
		.pc_four(stage_2_pc_four_out),
		.clk(clock),
		.size_in(stage_2_size_in),
		.mem_to_reg(stage_2_mem_to_reg_out),
		.mem_read_out(stage_2_mem_read_out),
		.mem_write_out(stage_2_mem_write_out),
		.load_byte(stage_2_load_byte),
		
		.alu_out(alu_out),
		.store_bytes_out(stage_2_reg2_out),
		.instruction(stage_2_instruction_out),
		.destination_register(mux_dest_reg_out),
		
		//.reg_dest_out(stage_2_reg_dest_out),
		.reg_write_out(stage_2_reg_write_out),
		.write_out(stage_2_write_out),
		//.jump_and_link_out(stage_2_jump_and_link_out),
		.write_register_data_out(stage_2_write_register_data_out),
		.write_register(stage_2_write_register_out),
		
		//OUTPUTS
		.stage3_pc_four(stage_3_pc_four_out),
		.instruction_out(stage_3_instruction_out),
		.stage3_size_in(stage3_size_in),
		.stage3_mem_to_reg(stage3_mem_to_reg),
		.stage3_mem_read_out(stage3_mem_read_out),
		.stage3_mem_write_out(stage3_mem_write_out),
		.stage3_load_byte(stage3_load_byte),
		
		.stage3_alu_out(stage3_alu_out),
		.stage3_store_bytes_out(stage3_store_bytes_out),
		.stage3_destination_register(stage3_destination_register),
		
		//.stage3_reg_dest_out(stage3_reg_dest_out),
		.stage3_reg_write_out(stage3_reg_write_out),
		.stage3_write_out(stage3_write_out),
		//.stage3_jump_and_link_out(stage3_jump_and_link_out),
		.stage3_write_register_data_out(stage3_write_register_data_out),
		.stage3_write_register(stage3_write_register)
);

MEMWB
	stage4
	(
		.clk(clock),
		.reg_write_out(stage3_reg_write_out),
		.write_register_data(mux_write_data_out),
		.write_register_destination(mux_jal_mux_out),
		
		.stage4_reg_write_out(stage4_reg_write_out),
		.stage4_write_register_data(stage4_write_register_data),
		.stage4_write_register_destination(stage4_write_register_destination)
	
);

endmodule
